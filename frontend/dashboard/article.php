<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: ../login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Article - MoodMate</title>
  <link rel="shortcut icon" href="../src/assets/images/MoodMate-Logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" href="../src/style/sidebar.css" />
  <link rel="stylesheet" href="../src/style/article.css" />
  <style>
    .pagination {
      justify-content: center;
      margin-top: 20px;
    }
    .card {
      margin-bottom: 20px;
    }
    .collapse-video {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>
      <div class="col-9">
        <div class="article-wrapper p-3">
          <div class="article">
            <div class="header-content-article text-end mt-5">
              <h4>ARTICLE</h4>
            </div>
            <div class="main-content-article mt-4">
              <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-primary mx-2" id="deepBreathingBtn">Deep Breathing</button>
                <button class="btn btn-warning mx-2" id="hypnosisBtn">Hypnosis</button>
                <button class="btn btn-success mx-2" id="meditationBtn">Meditation</button>
              </div>
              <div id="deepBreathingContent" class="session-content" style="display: none;">
                <div id="deepBreathingArticles"></div>
                <ul class="pagination" id="deepBreathingPagination"></ul>
              </div>
              <div id="hypnosisContent" class="session-content" style="display: none;">
                <div id="hypnosisArticles"></div>
                <ul class="pagination" id="hypnosisPagination"></ul>
              </div>
              <div id="meditationContent" class="session-content" style="display: none;">
                <div id="meditationArticles"></div>
                <ul class="pagination" id="meditationPagination"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const articles = {
      deepbreathing: [
        { title: "The role of deep breathing on stress", content: "The objective of this study was to verify, in a sample of university students, whether a relaxing technique called deep breathing (stress Intervention Functional IFA) is capable to improve the mood and to reduce the levels of stress. Thirty-eight adult healthy subjects (aged between 18 and 28 years) volunteered the study. They were randomly divided in two groups, the Experimental Group (N = 19) and the Control Group (N = 19). The subjects of the Experimental Group were submitted, once per week, to 10 treatment’s sessions of Anti-stress Protocol, each lasting 90 min, whereas subjects of the Control Group sat ten times for 90 min, once per week, without practicing any treatment. The psychological state of mood and stress was evaluated using Measurement of Psychological Stress (MSP) and Profile of Mood State (POMS), while the bio logical profile of the stress was detected by measuring the heart rate and the salivary cortisol. The results obtained from the present research support the possibility that deep breathing technique is capable to induce an effective improvement in mood and stress both in terms of self reported evaluations (MPS and POMS) and of objective parameters, such as heart rate and salivary cortisol levels.", pdf: "../src/assets/deepbreathing/Therole.pdf" },
        { title: "Benefits from one session of deep and slow breathing on vagal tone and anxiety in young and older adults", content: "Anxiety is recognized as a major health issue and is quite prevalent among older adults. An efcient way to manage anxiety is abdominal breathing. Breathing exercises seem to reduce anxiety and to increase parasympathetic activity assessed by HRV indexes. Yet, the efect of abdominal breathing on physiological stress (HRV) and anxiety in older adults remains poorly understood. Therefore, the aim of this study is to test the efects of deep and slow breathing (DSB, low inhale/exhale ratio) on physiological stress and anxiety in older adults (n = 22) in comparison with younger ones (n = 25). DSB increased signifcantly HFpower and reduced state anxiety in both younger and older adults DSB increased signifcantly HFpower and reduced state anxiety in both younger and older adults. Interestingly, the increased in HF power was signifcantly higher among older adults than younger ones. As expected, the ratio inhale/exhale being not equal, RMSSD did not increase following DSB. Thus, we provide evidence suggesting that DSB is more benefcial to older adults than younger ones to restore vagal outfow. Despite future work being required, those results provide relevant clinical application leads to manage state anxiety among older adults and to promote successfull aging. ", pdf: "../src/assets/deepbreathing/Benefits.pdf" },
        { title: "Decrease  Anxiety  among  Students  Who  Will  Do  the  Objective Structured  Clinical  Examination  with  Deep  Breathing  Relaxation Technique ", content: "The anxiety is an emotional and subjective experience without any specific object so that people eel  a  feeling  of  worry  as  if  something  bad  will  happen  and  generally  accompanied  by  autonomic  symptoms lasting  some  time.  Like  students  who  will  carry  out  the  OSCE  exam  at  the  end  of  each  semester  as  a  form  of evaluation  of  the  extent  to  which  nursing  students  have  mastered  the  learning  outcomes  that  have  been  set during  the  OSCE  examination  during  the  OSCE  examination  all  students  are  required  to  display  cognitive,affective and psychomotor skills quickly, precisely complete. This is what generally can cause anxiety in students. We aimed to determine the decrease in student anxiety about the OSCE exam by relaxing deep breathing. This study was a quasi-experiment; pre-post test with control group design. The 40 undergraduate nursing program students  with  random sampling  were divided into two,  namely the control  group and the intervention group. The instrument uses a questionnaire.  The  independent  t-test  test  results  with  a  value  of  t  count  3.743  with  a  value  of  p  =  0.031  <  0.05, which that there was a decrease in student anxiety about the OSCE exam with deep breath relaxation. It is expected that all students who will carry out the exam can apply this  technique to carry out  the exam in calm conditions and satisfying results. ", pdf: "../src/assets/deepbreathing/Decrease.pdf" },
        { title: "Deep Pressure Therapy: A Promising Anxiety Treatment for ", content: "One method for managing anxiety, a highly prevalent modern mental health condition, is the calming touch sensations of deep pressure therapy (DPT). Solutions for administering DPT include the Automatic Inflatable DPT (AID) Vest, which we designed in past work. Although benefits of DPT are clear in a subset of the related literature, these benefits are not ubiquitous. There is limited understanding of what factors lead to DPT success for a given user. In this work, we present the findings of a user study (N = 25) that evaluates the effects of the AID Vest on anxiety. We compared physiological and self-reported measures of anxiety across Active (inflating) and Control (inactive) states of the AID Vest. In addition, we considered the presence of placebo effects and assessed participant comfort with social touch as a potential moderator. The results support our ability to reliably induce anxiety, and show that the Active AID Vest tended to reduce biosignals related to anxiety. We also found a significant relationship between comfort with social touch and reductions in self-reported state anxiety for the Active condition. Those who seek to successfully deploy DPT can benefit from this work.", pdf: "../src/assets/deepbreathing/Deep.pdf" },
        { title: "A better state-of-mind: deep breathing reduces state anxiety and enhances test performance through regulating test cognitions in children", content: "A pre-test/post-test, intervention-versus-control experimental design was used to examine the effects, mechanisms and moderators of deep breathing on state anxiety and test performance in 122 Primary 5 students. Taking deep breaths before a timed math test significantly reduced self-reported feelings of anxiety and improved test performance. There was a statistical trend towards greater effectiveness in reducing state anxiety for boys compared to girls, and in enhancing test performance for students with higher autonomic reactivity in test-like situations. The latter moderation was significant when comparing high-versus-low autonomic reactivity groups. Mediation analyses suggest that deep breathing reduces state anxiety in test-like situations, creating a better state-of-mind by enhancing the regulation of adaptive-maladaptive thoughts during the test, allowing for better performance. The quick and simple technique can be easily learnt and effectively applied by most children to immediately alleviate some of the adverse effects of test anxiety on psychological well being and academic performance.", pdf: "../src/assets/deepbreathing/Therole.pdf" },
      
      ],
      hypnosis: [
        { title: "Close your eyes and relax”: the role of hypnosis in reducing anxiety, and its implications for the prevention of cardiovascular diseases", content: "Anxiety is the most common form of mental health disorder, affecting millions of people worldwide. Psychosocial interventions such as mindfulness and cognitive behavioral therapy (CBT) have been suggested as an effective treatment in the management of general anxiety and anxiety disorders, with emerging evidence also suggesting the effectiveness of hypnosis. Moreover, anxiety has shown to be linked to the onset and development of several cardiovascular diseases (CVD), which are the leading cause of global death. In this paper, we review the current literature to examine the role that anxiety has on the onset and development of CVD and summarize the current knowledge on the role that hypnosis and hypnotherapy have in reducing anxiety, also explaining how this can impact the cardiovascular system and the prevention of CVD. Review of the evidence suggests that hypnosis and hypnotherapy are effective in treating anxiety and may positively affect the heart and the cardiovascular system, reducing sympathetic activation and increasing parasympathetic tone, potentially preventing the onset of CVD related to increased sympathetic activation. However, further studies are required to further understand how hypnosis and hypnotherapy affect the cardiovascular system through investigation of the neurophysiological components of the hypnotic state and of the mind-body relationship. Healthcare systems should embed mental health screening in patients at risk of developing CVD as part of the clinical pathway and consider the role that hypnosis and hypnotherapy may play in the management of CVD.", pdf: "../src/assets/hypnosis/Close.pdf" },
        { title: "Can hypnosis and virtual reality reduce anxiety, pain and fatigue among patients who undergo cardiac surgery: a randomised controlled trial", content: "Background: Different non-pharmacological techniques, including hypnosis and virtual reality (VR)  are currently used as complementary tools in the treatment of anxiety, acute and chronic pain. A new technique called virtual reality hypnosis (VRH), which encompasses a combination of both tools, is regularly used although its benefits and underlying mechanisms remain unknown to date. With the goal to improve our understanding of VRH combination effects, it is necessary to conduct randomised and controlled research trials in order to understand their clinical interest and potential benefits. Methods: Patients (n = 100) undergoing cardiac surgery at the Liège University Hospital will be randomly assigned to one of four conditions (control, hypnosis, VR or VRH). Each patient will receive two sessions of one of the techniques: one the day before the surgery and one the day after. Physiological assessments will be made on the monitor and patients will rate their levels of anxiety, fatigue, pain, absorption and dissociation. Discussion: This study will help to expand knowledge on the application of virtual reality, hypnosis and VRH in the specific context of cardiac and intensive care procedures, and the influence of these non-pharmacological techniques on patient’s anxiety, fatigue, pain and phenomenological experience. Trial registration: ClinicalTrials.gov: NCT03820700. Date registered on 29 January 2019. Study recruitment date: October 6, 2018. Study anticipated completion date: December 28, 2020. Keywords: Cardiac surgery, Cardiology, Intensive care units, Non-pharmacological approaches, Pain, Anxiety, Fatigue, Hypnosis, Virtual reality, Virtual reality hypnosis", pdf: "../src/assets/hypnosis/Can_Hypno.pdf" },
        { title: "Effectiveness of Hypnosis for the Prevention of Anxiety During Coronary Angiography (HYPCOR study): a prospective randomized study", content: "Background: Coronary angiography is the gold standard for the diagnosis of coronary artery disease. This intervention is nevertheless a source of anxiety for the patient both by its discomfort and by the consequences linked to the discovery of potential diseases. Objectives: The aim of this study was to determine the efectiveness of hypnosis in reducing anxiety in patients undergoing coronary angiography. Methods: One hundred sixty-nine patients with planned coronary angiography and no history of coronary angiography were randomized to a hypnosis or control group. Patients in the hypnosis group underwent a hypnosis session with self-hypnosis posthypnotic suggestions, while those in the control group had a conversational interview with the hypnotherapist. The primary endpoint was pre-exam anxiety level assessed by the Spielberger State-Trait Anxiety Inventory (STAI-Y A). Results: Performing a hypnosis session did not result in a signifcant decrease in anxiety before the intervention. Age, high trait anxiety, high state anxiety the day before, and belief that hypnosis works in general were associated with increased anxiety before the procedure. No adverse events were reported after hypnosis. There was no statistically signifcant diference between the 2 groups for the occurrence of complications of the intervention. Conclusion: In this study, performing a hypnosis session before coronary angiography did not reduce the state of anxiety measured just before the intervention. In all cases, the hypnotic experience appears to be positive for the patient, encouraging further research eforts. ", pdf: "../src/assets/hypnosis/Effectiveness.pdf" },
        { title: "Group hypnosis for stress reduction and improved stress coping: a multicenter randomized controlled trial", content: "Background: The aim of the trial was to investigate the effect of a hypnotherapeutic group program in healthy persons with increased levels of perceived stress. Methods: In a randomized controlled multicenter trial participants with a self-assessed subjective stress level ≥ 40 mm on a visual analogue scale (0–100 mm; VAS) for the previous week and a stable state of health were randomized to either 5 weekly sessions of 120-min duration of a hypnotherapeutic group program for stress reduction and improved stress coping plus 5 hypnosis audiorecords for individual practice at home plus an educational booklet for stress coping (hypnosis group) versus an educational booklet only (control group). The primary outcome parameter was the VAS stress level for the previous week after 5 weeks. Secondary outcome parameters included the VAS stress level after 12 weeks, perceived stress (CPSS), depression (ADS-K), self efficacy (SWE) and quality of life (SF 36) after 5 weeks and 12 weeks. Analysis of covariance with a significance level of 5% using the full analysis set was used for analysis; the model included treatment (fixed effect), VAS baseline value (fixed covariate), and center (random effect). Results: A total of 95 participants were randomized; 47 (40 female, 45 ± 13.4 years of age) were allocated to the hypnosis group, and 48 (41 female, 46.9 ± 14.3 years) were allocated to the control group. Regarding VAS stress level after 5 weeks, the adjusted VAS mean in the hypnosis group was 41.8 mm [95% confidence interval (CI): 35.2; 48.4] compared to 62.9 mm [56.2; 69.7] in the control group, and the group difference was − 21.2 mm [− 30.1; − 12.2] (P < 0.001). After 12 weeks, the stress intensity on the VAS showed a between-group difference of − 14.7 mm [− 25.1; − 4.4] (P = 0.006), and the adjusted means were 41.1 mm [33.4; 48.8] in the hypnosis group and 55.9 mm [48.4; 63.5] in the control group. Improvements were also reported for CPSS, SF-36, SWE and ADS-K after 5 and 12 weeks. Conclusion: Compared to the control group, the hypnosis group showed reduced perceived stress after 5 and 12 weeks", pdf: "../src/assets/hypnosis/GroupHypnosis.pdf" },
        { title: "Virtual reality and hypnosis for anxiety and pain management in intensive care units", content: "BACKGROUND Virtual reality and hypnosis are little studied in complex contexts, such as intensive care, where patients need significant physical and psychological assistance. OBJECTIVES To compare and combine hypnosis and virtual reality benefits on anxiety and pain on patients before and after cardiac surgery. DESIGN Prospective randomised controlled clinical trial. SETTING The study was conducted in the University Hospital of Liege (Belgium) from October 2018 to January 2020. PATIENTS One hundred patients (66 11.5 years; 24 women, 76 men) were included. Participants were adults undergoing cardiac surgery. Exclusion criteria: psychiatric diseases, claustrophobia, acrophobia, hearing loss, visual impairment, extreme fatigue, confusion surgery cancelled. INTERVENTIONS Patients were randomly assigned to four arms (control; hypnosis; virtual reality; virtual reality hypnosis) and had 20 min of one of the techniques the day before and the day after surgery. MAIN OUTCOMES MEASURES Anxiety, pain, fatigue, relaxation, physiological parameters, and opioid use were evaluated before and after each session. RESULTS The main results did not show any significant differences between the groups. In all groups, anxiety decreased and pain increased from baseline to the postoperative day. Relaxation increased in all groups in the preoperative (P < 0.0001) and postoperative period (P ¼ 0.03). There were no significant differences for fatigue, physiological measures, or opioid use. CONCLUSION As there were no significant differences between groups for the measured variables, we cannot affirm that one technique is better than another. Additional studies are required to compare and evaluate the cost-effectiveness of these techniques for critical care patients and caregivers.", pdf: "../src/assets/hypnosis/EVRandHypno.pdf" },
        { title: "", content: ".", video: "https://www.youtube.com/embed/exampleVideo1" },

      ],
      meditation: [
        { title: "", content: "", video: "https://youtu.be/j734gLbQFbU?si=nGujmyD7VpFJi0fY" },
        { title: "Use of Meditation and Cognitive Behavioral Therapies for the Treatment of Stress, Depression and Anxiety in Students. A Systematic Review and Meta-Analysis", content: "The prevalence of mental health problems within students due to high academic demands and learning difficulties is a current challenge the field of education. The aim of this study is to review the scientific literature in order to analyze the effect produced by cognitive-behavioral programs and meditation strategies on stress, anxiety, and depression in students. A further aim is to identify the determinants of treatment success. The bibliographic search was carried out using Web of Science, specifically in the categories of “Education and Educational Research” and “Psychology”, obtaining a sample of 122 articles published between 2007 and 2018. Studies were included which had a pre experimental or quasi-experimental design and included pre-test and post-test phases. Following application of inclusion criteria, 34 articles were selected for inclusion in a meta-analysis of the random effects of each variable. This obtained an average effect size of −0.41 for stress, −0.37 for anxiety, and −0.30 for depression. Three moderating variables were analyzed, with significant correlations being found for the type of treatment relating to stress (Q = 11.01, df = 2, p = 0.004, R 2 = 0.294) and depression (Q = 6.14, df = 2, p = 0.048; R2 = 0.436). The stage of education of the individuals was also found to impact upon anxiety intervention success (Q = 13.093 df = 2, p = 0.0009, R 2 = 0.196). Interventions mainly addressed the importance of meditation strategies, mindfulness programs, and cognitive-behavioral therapy to reduce stress, anxiety, and depression in students. This supports the need to increase research at an early age, considering the treatment of mental health as a key factor influencing academic performance and quality of life.", pdf: "../src/assets/hypnosis/use_of_Meditation.pdf" },
        { title: "Brief mindfulness-based training and mindfulness trait attenuate psychological stress in university students: a randomized controlled trial", content: "Background: Psychological distress in University settings has grown and became a public health concern. In this context, contemplative practices such as mindfulness have been proposed as a strategy to help students on stress management. Methods: Forty university students (20 female), aged between 18 to 30 years (mean=24.15; SD=3.56), with no previous experience with meditation or yoga were recruited at the Federal University of Rio Grande do Norte and randomized to a mindfulness training (MT) or active control (AC) groups. We analyzed measures of anxiety, afect, stress, as well as state and trait mindfulness in order to evaluate the efects of trait mindfulness and a brief mindful  ness intervention in forty healthy young students. Participants were classifed as Low (n=27, females=13) or High (n=13, females=7) Trait Mindfulness by kmeans clustering and compared between them using Wilcoxon sum rank test. Furthermore, the sample was randomly allocated to an AC (n=20, females=10) or a MT (n=20, females=10) group, and mixed analysis of variance was performed to analyze the efect of interventions. The mechanisms and role of trait mindfulness in the intervention was assessed by a moderated mediation analysis. Results: We found that High Trait individuals have lower anxiety trait, anxiety state and perceived stress levels. Only the MT group reduced their anxiety state and perceived stress after the intervention and increased their state mind  fulness. Both groups reduced negative afect and cortisol, and no change was found in positive afect. Moderated mediation analysis showed that the traininginduced change in state mindfulness mediated the increase in positive afect and the decrease in perceived stress and cortisol, regardless of trait mindfulness. For anxiety state the decrease only occurred in individuals with High Trait Mindfulness. Conclusions: Together, these results suggest that higher trait mindfulness is associated with low levels of psycho  logical distress and that a brief mindfulnessbased intervention seems to be useful to reduce distress measures in university students", pdf: "../src/assets/hypnosis/Brief_mindfulness.pdf" },
        { title: "Efficacy of the Mindfulness Meditation Mobile App “Calm” toReduce Stress Among College Students: Randomized Controlled Trial", content: "Background: College students experience high levels of stress. Mindfulness meditation delivered via a mobile app may be an appealing, efficacious way to reduce stress in college students. Objective: We aimed to test the initial efficacy and sustained effects of an 8-week mindfulness meditation mobile app—Calm—compared to a wait-list control on stress, mindfulness, and self-compassion in college students with elevated stress. We also explored the intervention’s effect on health behaviors (ie, sleep disturbance, alcohol consumption [binge drinking], physical activity, and healthy eating [fruit and vegetable consumption]) and the feasibility and acceptability of the app. Methods: This study was a randomized, wait-list, control trial with assessments at baseline, postintervention (8 weeks), and at follow-up (12 weeks). Participants were eligible if they were current full-time undergraduate students and (1) at least 18 years of age, (2) scored ≥14 points on the Perceived Stress Scale, (3) owned a smartphone, (4) were willing to download the Calm app, (5) were willing to be randomized, and (7) were able to read and understand English. Participants were asked to meditate using Calm at least 10 minutes per day. A P value ≤.05 was considered statistically significant. Results: A total of 88 participants were included in the analysis. The mean age (SD) was 20.41 (2.31) years for the intervention group and 21.85 (6.3) years for the control group. There were significant differences in all outcomes (stress, mindfulness, and self-compassion) between the intervention and control groups after adjustment for covariates postintervention (all P.19). Similar results were found for mindfulness and self-compassion. Effect sizes ranged from moderate (0.59) to large (1.24) across all outcomes. A significant group×time interaction in models of sleep disturbance was found, but no significant effects were found for other health behaviors. The majority of students in the intervention group reported that Calm was helpful to reduce stress and stated they would use Calm in the future. The majority were satisfied using Calm and likely to recommend it to other college students. The intervention group participated in meditation for an average of 38 minutes/week during the intervention and 20 minutes/week during follow-up.", pdf: "../src/assets/hypnosis/Efficacy_of_the_Mindfulness.pdf" },
        { title: "Impact of a Yoga and Meditation Intervention on Students’ Stress andAnxiety Levels", content: "Objective. To evaluate the impact of a six-week yoga and meditation intervention on college students’ stress perception, anxiety levels, and mindfulness skills. Methods. College students participated in a six-week pilot program that consisted of a 60-minute vinyasa flow yoga class once weekly, followed by guided meditation delivered by trained faculty members at the University of Rhode Island College of Pharmacy. Students completed pre- and postintervention questionnaires to evaluate changes in the following outcomes: stress levels, anxiety levels, and mindfulness skills. The questionnaire consisted of three self-reporting tools: the Beck Anxiety Inventory (BAI), the Perceived Stress Scale (PSS), and the Five Facet Mindfulness Questionnaire (FFMQ). Students’ scores on each were assessed to detect any changes from baseline using the numerical and categorical scales (low, medium, and high) for each instrument. Results. Seventeen participants, aged 19 to 23 years, completed the study. Thirteen participants were female and four were male. Nine of the students were enrolled in the Doctor of Pharmacy program and eight were enrolled in other academic programs. Students’ anxiety and stress scores decreased significantly while their total mindfulness increased significantly. Changes in categorical data from pre- to post-intervention on the BAI and PSS were significant, with no students scoring in the “high” category for stress or anxiety on the post intervention questionnaire. Conclusion. Students experienced a reduction in stress and anxiety levels after completing a six-week yoga and meditation program preceding final examinations. Results suggest that adopting a mindfulness practice for as little as once per week may reduce stress and anxiety in college students. Administrators should consider including instruction in nonpharmacologic stress and anxiety reduction methods, within curricula in order to support student self-care.", pdf: "../src/assets/hypnosis/Impact_of_a_Yoga_and_Meditation.pdf" },
        { title: "Meditation and Yoga for Posttraumatic Stress Disorder: A Meta Analytic Review of Randomized Controlled Trials", content: "Posttraumatic stress disorder (PTSD) is a chronic and debilitating disorder that affects the lives of 7 8% of adults in the U.S. Although several interventions demonstrate clinical effectiveness for treating PTSD, many patients continue to have residual symptoms and ask for a variety of treatment options. Complementary health approaches, such as meditation and yoga, hold promise for treating symptoms of PTSD. This meta-analysis evaluates the effect size (ES) of yoga and meditation on PTSD outcomes in adult patients. We also examined whether the intervention type, PTSD outcome measure, study population, sample size, or control condition moderated the effects of complementary approaches on PTSD outcomes. The studies included were 19 randomized control trials with data on 1,173 participants. A random effects model yielded a statistically significant ES in the small to medium range (ES = −.39, p < .001, 95% CI [−.57, −.22]). There were no appreciable differences between intervention types, study population, outcome measures, or control condition. There was, however, a marginally significant higher ES for sample size ≤ 30 (ES = −.78, k = 5). These findings suggest that meditation and yoga are promising complementary approaches in the treatment of PTSD among adults and warrant further study.", pdf: "../src/assets/hypnosis/Meditation_and_Yoga_for_PTSD.pdf" },
        { title: "Mindfulness on-the-go: Effects of a mindfulness meditation app on work stress and well-being", content: "We investigated whether a mindfulness meditation program delivered via a smartphone application (app) could improve psychological well-being, reduce job strain, and reduce ambulatory blood pressure during the workday. Participants were 238 healthy employees from two large UK companies that were randomized to a mindfulness meditation practice app or a wait-list control condition. The app offered 45 pre-recorded 10–20 minute guided audio meditations. Participants were asked to complete one meditation per day. Psychosocial measures, and blood pressure throughout one working day, were measured at baseline and 8 weeks later; a follow-up survey was also emailed to participants 16 weeks after the intervention start. Usage data showed that during the 8-week intervention period, participants randomized to the intervention completed an average of 17 meditation sessions (range 0 to 45 sessions). The intervention group reported significant improvement in well-being, distress, job strain, and perceptions of workplace social support compared to the control group. In addition, the intervention group had a marginally significant decrease in self-measured workday systolic blood pressure from pre to post intervention. Sustained positive effects in the intervention group were found for well-being and job strain at the 16-week follow-up assessment. This trial suggests that short guided mindfulness meditations delivered via smartphone and practiced multiple times per week can improve outcomes related to work stress and well-being, with potentially lasting effects.", pdf: "../src/assets/hypnosis/Mindfulness_on_the_go.pdf" },
        { title: "The Mindfulness App Trial for Weight, Weight-Related Behaviors, and Stress in University Students: Randomized Controlled Trial", content: "Background: University students are at risk of weight gain during their studies. Key factors related to weight gain in this population include unhealthy weight-related behaviors because of stress. Mindfulness holds promise for weight management. However, there has not been any previous trial that has explored the effectiveness of a student-tailored mindfulness app for stress, weight-related behaviors, and weight. There is limited evidence that current mindfulness apps use evidence-based mindfulness techniques. A novel app was developed that combined evidence-based, mindfulness-based stress reduction and mindful eating (ME) techniques that were tailored to university students, with student-relevant themes for targeting weight behaviors, weight, and stress. Objectives: The aim of this study was to test the effectiveness, acceptability, and feasibility of a student-tailored mindfulness app for weight, weight-related behaviors, and stress. Testing this app in a rigorous randomized controlled trial (RCT) for these outcomes is a novelty and contribution to this emerging field. Methods: A 2-arm RCT of an 11-week duration was undertaken at the University of Queensland. Students were either randomized to the mindfulness app (n=45) or to a behavioral self monitoring electronic diary (e-diary; n=45) for diet and exercise. Analysis of covariance was used to compare differences in weight, stress, mindfulness, ME, physical activity, and eating behaviors between both groups. Results: Neither the mindfulness app group nor the e-diary group lost weight and there were no differences between the groups at follow-up. The mindfulness app group had significantly lower stress levels (P=.02) (adherers only), lower emotional eating (P=.02), and uncontrolled eating (P=.02) as well as higher mindfulness (P≤.001) and ME levels overall (P≤.001). The e-diary group had higher metabolic equivalents of moderate activity levels (P≤.01). However, the effect sizes were small. Regular adherence to mindfulness exercises in the app was low in the group. The majority of students (94%) liked the app and found it to be acceptable. Compared with other exercises, the most helpful reported meditation was the short breathing exercise observing the breath (39.4% [13/33] preferred it). This was the first RCT that tested a mindfulness app for weight and weight-related behaviors in students. The modest level of user adherence likely contributes to the lack of effect on weight loss. However, there was a small, albeit promising, effect on weight related eating behavior and stress. Conclusions: A mindfulness app demonstrated effectiveness for stress, eating behaviors, mindfulness, and ME, but the effect sizes were small. Future studies should be conducted over longer periods of time and with greater participant compliance", pdf: "../src/assets/hypnosis/The_Mindfulness_App_Trial.pdf" },
        { title: "The Effects of Mindfulness Meditation on Stress and Burnout in Nurses", content: "Background: Occupational burnout related to stress in the workplace is experienced by nurses who are regularly confronted with trauma, suffering, and high workloads. Burnout can negatively impact patient care and have detrimental effects on nurses’ physical and mental health. Mindfulness-based stress reduction programs have been researched as a potential holistic intervention for reducing stress and burnout in nurses through cultivating present awareness, emotional regulation, and positive thinking. Purpose: This critical review of the literature explores current knowledge on the effectiveness of mindfulness meditation on stress and burnout in nurses, examines gaps in the current literature, and provides recommendations for future research on this topic. Methods: Search terms included mindfulness, meditation, mindfulnessbased stress reduction , occupational stress, stress, burnout, and nurs*. Peer-reviewed research directly related to the impact of mindfulness based stress reduction on nurses experiencing stress and/or burnout was reviewed. Findings: Findings reveal evidence that mindfulness meditation is effective in decreasing stress and burnout in nurses. Mindfulness-based interventions have been shown to significantly decrease stress, improve all aspects of burnout, and increase self-compassion and compassion satisfaction in practicing nurses. Conclusions: Mindfulness meditation has the potential to decrease stress and burnout in nurses by decreasing self-judgment and overidentification with experience, and by increasing resiliency, compassion, and emotional regulation.", pdf: "../src/assets/hypnosis/The_Effects_of_Mindfulness_Meditation" },
        { title: "Time perception and the experience of agency in meditation and hypnosis", content: "Mindfulness meditation and hypnosis are related in opposing ways to awareness of intentions. The cold control theory of hypnosis proposes that hypnotic responding involves the experience of involuntariness while performing an actually intentional action. Hypnosis therefore relies upon inaccurate metacognition about intentional actions and experiences. Mindfulness meditation centrally involves awareness of intentions and is associated with improved metacognitive access to intentions. Therefore, mindfulness meditators and highly hypnotizable people may lie at opposite ends of a spectrum with regard to metacognitive access to intention-related information. Here we review the theoretical background and evidence for differences in the metacognition of intentions in these groups, as revealed by chronometric measures of the awareness of voluntary action: the timing of an intention to move (Libet’s “W” judgments) and the compressed perception of time between an intentional action and its outcome (“intentional binding”). We review these measures and critically evaluate their proposed connection to the experience of volition and sense of agency.", pdf: "../src/assets/hypnosis/Time_perception.pdf" },
        { title: "", content: ".", video: "https://www.youtube.com/watch?v=cyMxWXlX9sU&ab_channel=Lavendaire" },
        { title: "", content: ".", video: "https://youtu.be/O-6f5wQXSu8?si=pdrlNQXD8cK3hT1i" },
        { title: "", content: ".", video: "https://youtu.be/vj0JDwQLof4?si=KW0C4p0G-wBNww36" },
        { title: "", content: ".", video: "https://youtu.be/1ZYbU82GVz4?si=t0cNUmyQlZPxpP1N" },
        { title: "", content: ".", video: "https://youtu.be/U9YKY7fdwyg?si=XEd61-5VqLzItdeU" },
        { title: "", content: ".", video: "https://youtu.be/oqJh0-71q8U?si=ANqGV_3I2udxft-v" },
        { title: "", content: ".", video: "https://youtu.be/ozaFsRbcC4o?si=kT2-vC-QUZqfSodI" },
        { title: "", content: ".", video: "https://youtu.be/4wKh265mCiA?si=y1JIGH0WsFyvJj_G" },

      ]
    };

    function renderArticles(section, containerId, paginationId, itemsPerPage = 3) {
  const container = document.getElementById(containerId);
  const pagination = document.getElementById(paginationId);
  const totalItems = articles[section]?.length || 0;
  if (totalItems === 0) {
    container.innerHTML = '<p>No articles available for this category.</p>';
    pagination.innerHTML = '';
    return;
  }

  const totalPages = Math.ceil(totalItems / itemsPerPage);
  let currentPage = 1;

  function displayPage(page) {
    container.innerHTML = "";
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    articles[section].slice(start, end).forEach((article, index) => {
      const card = document.createElement('div');
      card.className = 'card';

      // Function to extract YouTube video ID
      function extractYouTubeId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        const match = url.match(regExp);
        return (match && match[2].length === 11) ? match[2] : null;
      }

      const contentHTML = `
        <div class="card-header">
          <h5 class="card-title">${article.title || 'Untitled Article'}</h5>
        </div>
        <div class="card-body">
          ${article.content ? `<p class="justify-text">${article.content}</p>` : ''}
          ${article.pdf ? `<a class="btn btn-secondary" href="${article.pdf}" download="${article.title}.pdf">Download PDF</a>` : ''}
          ${article.video ? `
            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseVideo${start + index}" aria-expanded="false" aria-controls="collapseVideo${start + index}">
              Watch Video
            </button>
            <div class="collapse collapse-video" id="collapseVideo${start + index}">
              <iframe 
                width="100%" 
                height="400" 
                src="https://www.youtube.com/embed/${extractYouTubeId(article.video)}" 
                frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>` : ''}
        </div>
      `;
      card.innerHTML = contentHTML;
      container.appendChild(card);
    });
  }

  // Rest of the function remains the same as before
  function updatePagination() {
    pagination.innerHTML = "";
    for (let i = 1; i <= totalPages; i++) {
      const pageItem = document.createElement('li');
      pageItem.className = 'page-item';
      pageItem.innerHTML = `<button class="page-link">${i}</button>`;
      pageItem.addEventListener('click', () => {
        currentPage = i;
        displayPage(currentPage);
        updatePagination();
      });
      if (i === currentPage) pageItem.classList.add('active');
      pagination.appendChild(pageItem);
    }
  }

  displayPage(currentPage);
  updatePagination();
}

    document.getElementById('deepBreathingBtn').addEventListener('click', () => {
      renderArticles('deepbreathing', 'deepBreathingArticles', 'deepBreathingPagination');
      document.getElementById('deepBreathingContent').style.display = 'block';
      document.getElementById('hypnosisContent').style.display = 'none';
      document.getElementById('meditationContent').style.display = 'none';
    });

    document.getElementById('hypnosisBtn').addEventListener('click', () => {
      renderArticles('hypnosis', 'hypnosisArticles', 'hypnosisPagination');
      document.getElementById('deepBreathingContent').style.display = 'none';
      document.getElementById('hypnosisContent').style.display = 'block';
      document.getElementById('meditationContent').style.display = 'none';
    });

    document.getElementById('meditationBtn').addEventListener('click', () => {
      renderArticles('meditation', 'meditationArticles', 'meditationPagination');
      document.getElementById('deepBreathingContent').style.display = 'none';
      document.getElementById('hypnosisContent').style.display = 'none';
      document.getElementById('meditationContent').style.display = 'block';
    });

    document.getElementById('stressBtn').click();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
