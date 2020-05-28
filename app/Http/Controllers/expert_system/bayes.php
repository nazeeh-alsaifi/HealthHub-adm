<?php
$training_dir = 'id3_training.csv';
$testing_dir = 'new testing.csv';
$target = 'value';

$run = new bayes($training_dir,$testing_dir,$target);
class bayes
{
    public $model= array();
    function __construct($training_dir,$testing_dir,$target){
        $training_data = $this->csv_to_array($training_dir);
        $S = $training_data['samples'];
        $model['value'] = $this->propabitlity($S, $target);
        $H = $training_data['header'];
        foreach (array_keys($H) as $attr) {
            if ($attr != $target)
                $model[$attr] = $this->propabitlity($S, $target, $attr);
        }

        $this->model=$model;

    }
    function csv_to_array($filename = '', $delimiter = ',')
    {
        $training_data = array();
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = array();
        $samples = array();

        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
                if (!$header) {
                    $header = $row;
                } else {
                    $samples[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        foreach ($header as $value) {
            $new_header[$value] = 1;
        }
        $training_data['header'] = $new_header;
        $training_data['samples'] = $samples;
        return $training_data;
    }

    function possible_values($samples, $criteria)
    {
        $possible_values_count = array();
        foreach ($samples as $si) {
            $possible_values_count[$si[$criteria]] = array_key_exists($si[$criteria], $possible_values_count) ? $possible_values_count[$si[$criteria]] + 1 : 1;
        }
        return $possible_values_count;
    }

    function create_subset($samples, $target_attribute, $value)
    {

        foreach ($samples as $si) {
            if ($si[$target_attribute] == $value) {
                unset($si[$target_attribute]);
                $new_samples[] = $si;
            }
        }
        return $new_samples;
    }

    function propabitlity($samples, $target, $attribute = null)
    {
        $classes_prob = array();
        $possible_class_values_count =$this->possible_values($samples, $target);
        $total_count = count($samples);
        foreach ($possible_class_values_count as $key => $val) {
            try {
                $classes_prob[$key] = $val / $total_count;
            } catch (\Cassandra\Exception\DivideByZeroException $exception) {
                print_r($exception);
            };

        }
        if ($attribute == null)
            return $classes_prob;

        else {
            $attributes_values_prob = array();
            $possible_attribute_values_count = $this->possible_values($samples, $attribute);
            foreach (array_keys($possible_attribute_values_count) as $attr_val) {
                $subset = $this->create_subset($samples, $attribute, $attr_val);
                $possible_subset_values_count = $this->possible_values($subset, $target);
                $attribute_prob = array();

                foreach ($possible_subset_values_count as $key => $val) {
                    try {
                        $attribute_prob[$key] = $val / $possible_class_values_count[$key];
                    } catch (\Cassandra\Exception\DivideByZeroException $exception) {
                        print_r($exception);
                    };

                }
                $attributes_values_prob[$attr_val] = $attribute_prob;

            }

            return $attributes_values_prob;

        }

    }

    function predict($test_data, $model)
    {
        print_r("============== prediction ============\n");
        $samples = $test_data['samples'];
        $test_sample = $samples[0];
        foreach ($samples as $index => $test_sample) {
            $yes_prob = 1;
            foreach ($test_sample as $attr => $val) {
                $yes_prob *= isset($model[$attr][$val]['yes']) ? ($model[$attr][$val]['yes']) : 0;
            }
            print_r('[' . $index . '] yes:' . $yes_prob . "\n");


            $no_prob = 1;
            foreach ($test_sample as $attr => $val) {
                $no_prob *= isset($model[$attr][$val]['no']) ? ($model[$attr][$val]['no']) : 0;
            }
            print_r('[' . $index . '] no:' . $no_prob . "\n");

            if ($yes_prob > $no_prob) {
                print_r('[' . $index . '] prediction: YES' . "\n");
            } elseif ($no_prob > $yes_prob) {
                print_r('[' . $index . '] prediction: NO' . "\n");
            } else {
                print_r('there is a tie in [' . $index . '] prediction: YES' . "\n");
            }
            print_r("======================================\n");

        }
        return [];
    }

    function predictUsingArray($array)
    {
        $test_sample = $array;
        $yes_prob = 1;
        foreach ($test_sample as $attr => $val) {
            $yes_prob *= isset($this->model[$attr][$val]['yes']) ? ($this->model[$attr][$val]['yes']) : 0;
        }


        $no_prob = 1;
        foreach ($test_sample as $attr => $val) {
            $no_prob *= isset($this->model[$attr][$val]['no']) ? ($this->model[$attr][$val]['no']) : 0;
        }

        if ($yes_prob > $no_prob) {
            return "true";
        } elseif ($no_prob > $yes_prob) {
            return "false";
        } else {
            return "true";
        }

    }
}
