<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('articles')->insert([
            'id' => 1,
            'title' => 'Is there a link between blood infections and colorectal cancer?',
            'description' => 'New research has found a link between blood infections due to anaerobic bacteria and colorectal cancer. This finding may help with future cancer screenings.',
            'content' => 'Colorectal cancer occurs in the colon or the rectum. According to the Centers for Disease Control and Prevention (CDC), it is the third most common type of cancer in the United States. Around 90% of cases occur in people aged 50 years or older.

As well as age, risk factors include a family history of colorectal cancer, some genetic syndromes, obesity, a lack of exercise, a diet low in fruit and vegetables, and inflammatory bowel disease.

Anaerobic bacteria, unlike aerobic bacteria, do not require oxygen in order to function. They are a normal part of the human body, existing in various locations, including the gut.

They usually do not cause infections, but when they do, it is most often in the area that the bacteria inhabit.

The authors of the new study note that previous research had linked specific types of anaerobic bacteria with colorectal cancer. The researchers wanted to further explore this link through a large-scale study. 

-------------------------------------------
The study took place in two regions of Denmark between 2007 and 2016. It involved over 2 million participants.

For the analysis, the team gathered data on 45,760 blood infections, including information about the type of pathogens present in the participants’ bloodstreams.

The authors then compared this information with data from the Danish Colorectal Cancer Group Database. In particular, they looked for new cases of colorectal cancer, especially those that developed following a blood infection from any of the bacteria already associated with colorectal cancer.

Of the 45,760 people who had a bacterial blood infection, 492 (1.1%) later developed colorectal cancer. Of these, 241 (0.5%) were within the first year of the bacterial blood infection.

The researchers matched each of these people by age and sex to a control group of five people who had not had a blood infection.

---------------------------------
The study authors found that anaerobic bacterial blood infections were associated with a significant increase in the risk of colorectal cancer.

For example, those who had a Clostridium septicum infection were 42 times more likely to develop colorectal cancer within the next year.

Only 0.5% of the control group, who had not had a bacterial infection, developed colorectal cancer, compared with 20.8% of those who had a C. septicum infection.

As the study authors conclude in their paper: “In this large scale cohort study, it was found that, in [people] with blood infections caused by selected anaerobic bacteria, the risk of developing colorectal cancer was increased by up to 42 times compared with [people] with blood infections caused by aerobic bacteria such as [Escherichia coli] or [Staphylococcus aureus] or negative controls.”

-----------------------------------------

Study co-author Dr. Ulrik Justesen, from Odense University Hospital in Denmark, notes that although there was a clear link between anaerobic bacterial infections of the blood and colorectal cancer, it was not clear what the causal relationship was between them.

In Dr. Justesen’s words: “At this stage, we are not sure if the bacteria are directly causing cases of colorectal cancer, or if the blood infection with these bacteria is itself caused by the cancer. It’s an example of the question ‘Is this the chicken or the egg?’”

Looking ahead, Dr. Justesen and team want to gain more detail on bacteria in people with cancer.

He says: “Our follow-up research of this study will focus on the specific bacteria from [people with cancer] to see if we can identify specific characteristics that could be implicated in cancer development. If this is the case, it could be of great importance when it comes to screening and treatment of colorectal cancer.”

This may mean that screening for colorectal cancer could be more effective. According to Dr. Justesen, “With regards to screening, if we saw these high risk bacteria in combination with advanced age, then it would definitely be worth screening the [person] for colorectal cancer.”

Although the results are interesting, this research is awaiting presentation at a scientific conference. Therefore, details about the full methodology and results are not yet available.

The researchers have not yet written a full paper, and the results have not gone through peer review. Because of this, it is not possible to scrutinize the findings in full.',
            'image' => '20200602165207.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);




        DB::table('articles')->insert([
            'id' => 2,
            'title' => 'Using convalescent blood to treat COVID-19: The whys and hows',
            'description' => 'Some researchers and doctors have started using plasma from people recovering from COVID-19 to treat others who have developed the disease. Medical News Today spoke to Dr. Arturo Casadevall, from Johns Hopkins University, to learn more about this approach.',
            'content' => 'All data and statistics are based on publicly available data at the time of publication. Some information may be out of date. Visit our coronavirus hub and follow our live updates page for the most recent information on the COVID-19 outbreak.

In the search for an effective treatment for COVID-19, an old method of fighting infectious diseases has recently resurfaced: transfusions with convalescent plasma. Plasma is a component of blood.

This method has a simple premise. The blood of people who have recovered from an infection contains antibodies. Antibodies are molecules that have learned to recognize and fight the pathogens, such as viruses, that have caused disease.

Doctors can separate plasma, one of the blood components that contain such antibodies, and administer it to people whose bodies are currently fighting an infectious disease. This can help their immune systems reject the pathogen more efficiently.

Recently, researchers and healthcare professionals have been looking into the possibility of using this method to treat people with COVID-19, the respiratory disease caused by the SARS-CoV-2 virus.

In the United States, a group of researchers and doctors from 57 institutions, including Johns Hopkins University, the Albert Einstein College of Medicine, and the Icahn School of Medicine at Mount Sinai, are investigating and applying convalescent plasma therapy for COVID-19.

This is a concerted initiative — called the “National COVID-19 Convalescent Plasma Project” — born after the publication of a viewpoint paper in The Journal of Clinical Investigation in March, 2020.

The paper argued for the potential merits of passive antibody therapy in the treatment of COVID-19. It was authored by immunologists Dr. Arturo Casadevall, chair of the Molecular Microbiology & Immunology Department at Johns Hopkins Bloomberg School of Public Health, and Dr. Liise-anne Pirofski, professor of Infectious Diseases in the Department of Medicine at the Albert Einstein College of Medicine.

To understand more about convalescent plasma therapy, its merits, its risks, and its current use in COVID-19 treatments, Medical News Today recently spoke to Dr. Casadevall.

Here is what he told us, alongside more information on the current state of convalescent plasma therapy.',
            'image' => '20200602170218.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articles')->insert([
            'id' => 3,
            'title' => 'Sleep calculator: How much sleep do you need?',
            'description' => 'To get into a good sleep routine, a person can start by figuring out exactly how much sleep they need. Then, they can determine when they should be going to bed and waking up for optimal health.',
            'content' => '<p>Experts believe that sleep is just as important to a person’s health as food and water. Getting the <a href="/articles/325353" class="content-link css-29oowu">right amount of sleep</a> can help prevent disease, boost immunity, and improve <a rel="noopener noreferrer" href="/articles/154543" target="_blank" class="content-link css-29oowu">mental health</a>. </p>
<p>Still, many of us are not getting enough sleep. The <a href="https://www.cdc.gov/media/releases/2016/p0215-enough-sleep.html" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu">Centers for Disease Control and Prevention (CDC)</a> estimate that about one-third of adults consistently do not get the sleep that they need. </p>
<p>Building a healthy sleep pattern may require tweaking the schedule or lifestyle. While this can be challenging at first, the benefits of proper sleep are worth the effort.</p>
<p>Though there are general guidelines, some people need more sleep than others, due to their lifestyle, any health conditions, and their genetic makeup.</p>
<p>The <a href="https://www.sleepfoundation.org/articles/how-much-sleep-do-we-really-need" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu">National Sleep Foundation (NSF)</a> recommend that people of different ages get the following amounts of sleep every 24 hours:</p>
<ul class="ml-4"><li><strong>newborns (0–3 months)</strong>: 14–17 hours </li><li><strong>infants (4–11 months)</strong>: 12–15 hours </li><li><strong>toddlers (1–2 years)</strong>: 11–14 hours </li><li><strong>preschoolers (3–5 years)</strong>: 10–13 hours </li><li><strong>school-age children (6–13 years)</strong>: 9–11 hours </li><li><strong>teenagers (14–17 years)</strong>: 8–10 hours</li><li><strong>younger adults (18–25 years)</strong>: 7–9 hours </li><li><strong>adults (26–64 years)</strong>: 7–9 hours</li><li><strong>older adults (65 years and above)</strong>: 7–8 hours</li></ul>
<div class="css-0"><span style="font-size:0"></span><h2><div><a name="getting-enough-sleep">How to get the right amount</a></div></h2><p>The following chart can help a person figure out when they need to be going to bed to get 8 hours of sleep a night.<br><br>The <a href="https://www.sleep.org/articles/how-long-to-fall-asleep/" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu">NSF report</a> that, on average, people take 10–20 minutes to fall asleep. The calculations below assume that a person needs 15 minutes, but if someone tends to take longer, they should adjust their bedtime accordingly.</p><div class="able-responsive table-wrapper-scroll-y my-custom-scrollbar"><table class="table table-responsive"><tbody><tr><td><strong>Wake-up time</strong></td><td><strong>Bedtime (to get 8 hours of sleep):</strong></td></tr><tr><td>4:00 a.m.</td><td>7:45 p.m.</td></tr><tr><td>4:30 a.m.</td><td>8:15 p.m.</td></tr><tr><td>5:00 a.m.</td><td>8:45 p.m.</td></tr><tr><td>5:30 a.m.</td><td>9:15 p.m.</td></tr><tr><td>6:00 a.m.</td><td>9:45 p.m.</td></tr><tr><td>6:30 a.m.</td><td>10:15 p.m.</td></tr><tr><td>7:00 a.m.</td><td>10:45 p.m.</td></tr><tr><td>7:30 a.m.</td><td>11:15 p.m.</td></tr><tr><td>8:00 a.m.</td><td>11:45 p.m.</td></tr><tr><td>8:30 a.m.</td><td>12:15 a.m.</td></tr></tbody></table></div>
</div>
<div class="css-0"><span style="font-size:0"></span><h2><div><a name="sleep-cycles">Sleep cycles</a></div></h2><p>To be properly rested, the body must go through several sleep cycles per night, including <a href="/articles/247927" class="content-link css-29oowu">rapid eye movement (</a><a rel="noreferrer noopener" href="/articles/247927" target="_blank" class="content-link css-29oowu">REM</a><a href="/articles/247927" class="content-link css-29oowu">) sleep</a> and non-REM sleep. </p><p>The stages of sleep include:</p><ul class="ml-4"><li><strong>Stage 1 non-REM</strong>: This lasts for only a few minutes. Breathing, heart rate, and brain waves begin to slow.</li><li><strong>Stage 2 non-REM</strong>: This stage occurs before the body enters deep sleep. The muscles relax even more, and body temperature drops.</li><li><strong>Stage 3 non-REM</strong>: A person needs to reach this stage of deep sleep to feel rested, and it lasts longer in the first half of the night. Breathing and heart rate slow to their lowest levels.</li><li><strong>REM sleep</strong>: Within 90 minutes of falling asleep, a person enters REM sleep. The brain becomes more active, the most dreaming occurs, and the arms and legs become temporarily paralyzed.</li></ul><p>If the body does not go through these stages several times a night, the person may wake feeling fatigued and unfocused.</p></div>',
            'image' => '20200602173041.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);





        DB::table('articles')->insert([
            'id' => 4,
            'title' => 'Is there more than one strain of the new coronavirus?',
            'description' => 'In the latest installment of our “Hope Behind the Headlines” series, we look at the SARS-CoV-2 vaccine trials that have been progressing successfully, and at one promising therapeutic approach for COVID-19: Convalescent plasma therapy.',
            'content' => 'The COVID-19 pandemic has been taking its toll on the world for months now, but researchers have not been sparing any time or resources in looking for ways to defeat the new coronavirus that causes this disease.

Once every 2 weeks at Medical News Today, we review the most promising findings and scientific advances in the fight against SARS-CoV-2.

Previously, we looked at new drug candidates for the treatment of COVID-19, and at some helpful research approaches for scientists studying the virus.

In this feature, we update you on the progress of some of the most hopeful vaccine and therapy trials so far.

DNA vaccine shows promise in monkeys:

In a study paper appearing in Science on May 20, researchers from Harvard Medical School in Boston, MA, and other collaborating institutions report that they obtained promising results with a DNA vaccine that they trialed in rhesus macaques.

DNA vaccines are relative newcomers in the field of vaccine research. They work by introducing DNA molecules into the body, meaning to stimulate an immune response to markers of a specific virus.

In the study in Science, the research team developed six different DNA vaccines with the role of eliciting an immune response against the spike protein of SARS-CoV-2 — in other words, the protein that allows this virus to infect healthy cells.

The researchers injected 35 rhesus macaques with the various DNA vaccine iterations and then infected them with the new coronavirus to see whether and which of the vaccines were effective.

They found that one of the six vaccines — which encoded the full length spike protein — had a greater protective effect than the other candidates.

While the vaccinated monkeys did develop mild symptoms consistent with SARS-CoV-2 infection, they also developed neutralizing antibodies — or the molecules that are able to recognize and fight the virus.

Thus, these monkeys presented an immune response to SARS-CoV-2 that was similar to the one seen in nonhuman primates and humans who have recovered from an infection with the new coronavirus.

The researchers also saw that monkeys that they had vaccinated had a lower viral load than unvaccinated monkeys, following infection with SARS-CoV-2, which suggests a more robust immune response in the former.

From their observations, the investigators conclude that their vaccine candidate works primarily by inducing a rapid immune response upon the individual’s exposure to SARS-CoV-2.

“Further research will need to address the important questions of the durability of protective immunity and the optimal vaccine platforms for a SARS-CoV-2 vaccine for humans,” the team writes in the study paper.

New lead: Antibody from a SARS survivor: 

A study that Nature recently accepted for publication is the work of researchers affiliated with Vir Biotechnology, a biotech company with headquarters in San Francisco, CA. This research has found a new lead for vaccines.

The authors argue that an antibody present in the blood of someone who had recovered from SARS — the disease caused by the coronavirus SARS-CoV — could also be effective against SARS-CoV-2.

In laboratory tests, the researchers pitted the antibody they call “S309” against both SARS-CoV and SARS-CoV-2. They found that it was able to neutralize both.

The investigators explain that they initially identified S309 in blood samples from a person who contracted SARS-CoV during the epidemic of 2002–2003.

While these are early days, the team suggests that this newfound knowledge may eventually help control the spread of SARS-CoV-2.

“Accelerated development of [monoclonal antibodies] in a pandemic setting could be reduced to 5–6 months compared to the traditional timeline of 10–12 months,” the authors hypothesize in their paper.',
            'image' => '20200602184839.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articles')->insert([
            'id' => 5,
            'title' => 'Alcohol-related liver disease: New drug targets found',
            'description' => 'A study combining analysis of patient samples with mice studies has identified new drug targets for alcohol-related liver disease, which, currently, doctors can only treat by transplant.',
            'content' => '<p>Alcohol-related liver disease (ALD), as its name suggests, is damage to the liver that the excessive consumption of alcohol causes.</p>
<p>Over time, excessive alcohol consumption can cause inflammation and scarring (fibrosis) of liver tissue, and may eventually lead to liver failure. </p>
<p>According to an analysis of trends published in the World Journal of Hepatology in 2017, <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5756720/" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu">16.5%</a> of all liver transplants between 2002–2015 occurred as a result of ALD, making the disease the third most common reason for transplantation. </p>
<p>ALD is irreversible, and there is currently no treatment except for liver transplant. </p>
<p>Doctors typically advise people to stop drinking alcohol altogether to prevent further damage. This has limited success rates in those with alcohol misuse disorder and even has <a href="/articles/322373" class="content-link css-29oowu">risks in itself</a>.</p>
<p>A team from Massachusetts General Hospital have been working to identify desperately needed treatments for ALD. </p>
<p>In a new study featured in the journal <a href="https://www.pnas.org/content/early/2020/05/08/1911870117" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu"><em>PNAS</em></a>, they describe the molecular basis for the disease and possible new drug targets.</p>
<h2><div><a name="Analyzing-liver-cells"><strong>Analyzing liver cells</strong></a></div></h2>
<p>To better understand what causes the liver damage seen in ALD, the researchers started by analyzing human liver samples taken from a cohort of 51 people with varying degrees of ALD severity. </p>
<p>They looked at the expression of different genes in the samples using a technology called <a href="https://genomemedicine.biomedcentral.com/articles/10.1186/s13073-017-0467-4" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu">RNA sequencing</a>.</p>
<p>They found that the expression of several genes, including one called cGAS, was higher in individuals with more severe disease.</p>
<p>The gene cGAS is part of a known biological pathway that involves the molecule IRF3. Researchers already know that activation of this pathway causes the death of liver cells.</p>
<p>In people with ALD, the cGAS-IRF3 pathway initiates an inflammatory response that damages nearby cells and can eventually cause the liver to fail.</p>
<p>In people with ALD, the cGAS-IRF3 pathway initiates an inflammatory response that damages nearby cells and can eventually cause the liver to fail.</p>
<p>This study confirms the importance of cGAS<em></em>in ALD-related liver damage and shows that the level of cGAS expression in liver tissue has links with the severity of the disease.</p>

<div class="css-0">
<span style="font-size:0"></span><h2><div><a name="Uncovering-the-mechanism"><strong>Uncovering the mechanism</strong></a></div></h2>
<p>Scientists know that the cGAS-IRF3 pathway is important in ALD but have been unsure about how alcohol activates the IRF3 molecule, and what causes inflammation to spread throughout the liver.</p><p>Understanding this process is critical because the propagation of the inflammatory signal can continue to damage the liver, even when the person has stopped drinking alcohol.</p><p>To investigate this in more detail, the researchers turned to animal models. They fed mice the <a href="https://pubmed.ncbi.nlm.nih.gov/30025151/" target="_blank" rel="noopener noreferrer" class="content-link css-29oowu">Lieber-DeCarli diet,</a> which is an established model of chronic alcohol abuse in rodents. They found that the mice had increased levels of both cGAS and IRF3 in their liver tissue.</p><p>If excess alcohol causes an increase in the expression of these molecules, can removing them protect against alcohol-induced damage?</p><p>To test this, the team genetically engineered mice to remove the cGAS protein. When exposed to alcohol, these mice had both less IRF3 activation and less damage to their liver.</p><p>This showed that cGAS is critical to the ALD disease process and, therefore, a potential drug target.</p><p>The team also found another possible target called Cx32, which they showed to be important in IRF3 activation and the death of liver cells. </p><p>Mice without the gene for coding Cx32 had significantly less liver damage after consuming excess alcohol. The scientists also saw beneficial effects when they inhibited the molecule.</p></div>

<div class="css-0"><span style="font-size:0"></span><h2><div><a name="Encouraging-news">Encouraging news</a></div></h2><p>If scientists could repeat these findings in human studies, it would be an important step toward treating ALD, which has no successful treatments, so far, despite an increasing number of patients.</p><blockquote class="css-34gtoi"><strong></strong><p>“Now that we know the key players in this pathway, we finally have drug targets for treatment development.”<br><br>– Lead author Dr. Jay Luther, gastroenterologist and Director of the Mass General Alcohol Liver Center</p></blockquote><p>In showing what drives the activation of IRF3, the team also identified a molecular pathway critical to the disease process. This is a big step forward in scientific terms. </p><p>“Until now, we had only a few clues about why alcohol-related liver disease progresses the way it does, but this research fills in key pieces of the puzzle,” explains Dr. Suraj J. Patel, senior author and research fellow in the Department of Medicine at Massachusetts General. </p><p>The discovery of Cx32 as a key regulator of this process makes it an evidence-based target for drug development. This will be welcome news to the many millions of people living with ALD worldwide.</p></div>',
            'image' => '20200602185535.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



    }


}
