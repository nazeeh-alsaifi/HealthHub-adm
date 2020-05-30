@extends('layouts.app')

@section('content')
    <div id="expert-create" class="container" style="padding: 12vh;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header input-label text-center">Fill The Application :</div>

                    <div class="card-body">
                        <form method="post" action="{{route('article_store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="expert-row form-group row">
                                <label for="age"
                                       class="input-label col-md-4 col-form-label text-md-right">{{ __('Age:') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="discrete_age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="expert-row form-group row">
                                <label for="chest_pain_type"
                                       class="input-label col-md-4 col-form-label text-md-right">{{ __('Chest Pain Type:') }}</label>
                                <label for="chest_pain_type"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('Asympt') }}</label>

                                <div class="expert-radio-button">
                                    <input id="chest_pain_type" type="radio" class="form-control @error('chest_pain_type') is-invalid @enderror" name="chest_pain_type" value="asympt" checked required  autofocus>

                                    @error('chest_pain_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="chest_pain_type"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('Atyp_angina') }}</label>

                                <div class="expert-radio-button">
                                    <input id="chest_pain_type" type="radio" class="form-control @error('chest_pain_type') is-invalid @enderror" name="chest_pain_type" value="atyp_angina" required  autofocus>

                                    @error('chest_pain_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="chest_pain_type"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('Non_anginal') }}</label>

                                <div class="expert-radio-button">
                                    <input id="chest_pain_type" type="radio" class="form-control @error('chest_pain_type') is-invalid @enderror" name="chest_pain_type" value="non_anginal" required  autofocus>

                                    @error('chest_pain_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="expert-row form-group row">
                                <label for="discrete_rest_blood"
                                       class="input-label col-md-4 col-form-label text-md-right">{{ __('rest_blood') }}</label>

                                <div class="col-md-6">
                                    <input id="discrete_rest_blood" type="text" class="form-control @error('discrete_rest_blood') is-invalid @enderror" name="discrete_discrete_rest_blood" value="{{ old('discrete_rest_blood') }}" required autocomplete="discrete_rest_blood" autofocus>

                                    @error('discrete_rest_blood')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="expert-row form-group row">
                                <label for="blood_sugar"
                                       class="input-label col-md-4 col-lg-4 col-form-label text-md-right">{{ __('Blood Sugar:') }}</label>



                                <label for="blood_sugar"
                                       class="col-sm-2  col-form-label  text-md-right">{{ __('Yes') }}</label>

                                <div class="expert-radio-button">
                                    <input id="blood_sugar" type="radio" class="form-control @error('blood_sugar') is-invalid @enderror" name="blood_sugar" value="yes" checked required  autofocus>

                                    @error('blood_sugar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <label for="blood_sugar"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('No') }}</label>

                                <div class="expert-radio-button">
                                    <input id="blood_sugar" type="radio" class="form-control @error('blood_sugar') is-invalid @enderror" name="blood_sugar" value="no" required  autofocus>

                                    @error('blood_sugar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="expert-row form-group row">
                                <label for="rest_electro"
                                       class="input-label col-md-4 col-lg-4 col-form-label text-md-right">{{ __('Rest Electro:') }}</label>



                                <label for="rest_electro"
                                       class="col-sm-2  col-form-label  text-md-right">{{ __('Normal') }}</label>

                                <div class="expert-radio-button">
                                    <input id="rest_electro" type="radio" class="form-control @error('rest_electro') is-invalid @enderror" name="rest_electro" value="normal" checked required  autofocus>

                                    @error('rest_electro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <label for="rest_electro"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('Left_vent_hyper') }}</label>

                                <div class="expert-radio-button">
                                    <input id="rest_electro" type="radio" class="form-control @error('rest_electro') is-invalid @enderror" name="rest_electro" value="left_vent_hyper" required  autofocus>

                                    @error('rest_electro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="rest_electro"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('St_t_wave_abnormality') }}</label>

                                <div class="expert-radio-button">
                                    <input id="rest_electro" type="radio" class="form-control @error('rest_electro') is-invalid @enderror" name="rest_electro" value="st_t_wave_abnormality" required  autofocus>

                                    @error('rest_electro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="expert-row form-group row">
                                <label for="discrete_max_heart"
                                       class="input-label col-md-4 col-form-label text-md-right">{{ __('Max Heart Rate:') }}</label>

                                <div class="col-md-6">
                                    <input id="discrete_max_heart" type="text" class="form-control @error('discrete_max_heart') is-invalid @enderror" name="discrete_max_heart" value="{{ old('discrete_max_heart') }}" required autocomplete="discrete_max_heart" autofocus>

                                    @error('discrete_max_heart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="expert-row form-group row">
                                <label for="exercice_angina"
                                       class="input-label col-md-4 col-form-label text-md-right">{{ __('Exercice Angina:') }}</label>



                                <label for="exercice_angina"
                                       class="col-sm-2  col-form-label  text-md-right">{{ __('Yes') }}</label>

                                <div class="expert-radio-button">
                                    <input id="exercice_angina" type="radio" class="form-control @error('exercice_angina') is-invalid @enderror" name="exercice_angina" value="yes" checked required  autofocus>

                                    @error('exercice_angina')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <label for="exercice_angina"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('No') }}</label>

                                <div class="expert-radio-button">
                                    <input id="exercice_angina" type="radio" class="form-control @error('exercice_angina') is-invalid @enderror" name="exercice_angina" value="no" required  autofocus>

                                    @error('exercice_angina')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="expert-row form-group row">
                                <label for="expert-algorithm"
                                       class="input-label col-md-4 col-form-label text-md-right">{{ __('Choose Algorithm:') }}</label>



                                <label for="expert-algorithm"
                                       class="col-sm-2  col-form-label  text-md-right">{{ __('ID3') }}</label>

                                <div class="expert-radio-button">
                                    <input id="expert-algorithm" type="radio" class="form-control @error('expert-algorithm') is-invalid @enderror" name="expert-algorithm" value="id3" checked required  autofocus>

                                    @error('expert-algorithm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <label for="expert-algorithm"
                                       class="col-sm-2 col-form-label text-md-right">{{ __('BAYES') }}</label>

                                <div class="expert-radio-button">
                                    <input id="expert-algorithm" type="radio" class="form-control @error('expert-algorithm') is-invalid @enderror" name="expert-algorithm" value="bayes" required  autofocus>

                                    @error('expert-algorithm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary input-label">
                                        {{ __('Submit Application') }}
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
