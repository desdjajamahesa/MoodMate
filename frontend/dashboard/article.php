<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//   header("Location: ../login.php");
//   exit();
// }
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
      body {
      background-color: var(--bg-primary);
      font-family: 'Arial', sans-serif;
    }
    .header-content-article {
      background-color: var(--bg-secondary);
      color: var(--light-text);
      padding: 1.5rem;
      border-radius: 15px;
      margin-bottom: 1.5rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .pagination {
      justify-content: center;
      margin-top: 20px;
    }
    .card {
      margin-bottom: 10px;
    }
    .collapse-video {
      margin-top: 10px;
    }

    /* CSS untuk memastikan artikel bisa discroll */
    .card-body {
      max-height: 380px; /* Batas tinggi artikel */
      overflow-y: auto; /* Menambahkan scroll jika konten lebih panjang */
      padding-right: 10px; /* Memberikan ruang untuk scroll */
    }

    .article-title {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .article-content {
      font-size: 1rem;
      line-height: 1.6;
      margin-top: 10px;
    }

    .article-introduction {
      font-size: 1.1rem;
      margin-bottom: 10px;
      font-style: italic;
    }

    .article-wrapper {
      background-color: var(--nav-color);
      border-radius: 20px;
      padding: 2rem;
      margin: 1rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>
      <div class="col-9">
        <div class="article-wrapper p-3">
          <div class="header-content-article text-center mb-45">
            <div class="fw-bold">
              <h4>ARTICLE</h4>
            </div>
            <div class="main-content-article mt-4">
              <div class="d-flex justify-content-center mb-2">
                <button class="btn  mx-2" id="deepBreathingBtn">Deep Breathing</button>
                <button class="btn  mx-2" id="hypnosisBtn">Hypnosis</button>
                <button class="btn  mx-2" id="meditationBtn">Meditation</button>
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
        {
          title: "Deep Breathing",
    
          content: "Kecemasan dapat didefinisikan sebagai keadaan emosional yang menyebar secara temporal, untuk mengantisipasi potensi ancaman, terkait dengan respons stres fisiologis. Setiap orang telah mengalami perasaan cemas, khawatir, tegang, dan takut ketika menghadapi sesuatu. <p> Perasaan cemas pada seseorang adalah hal yang wajar, terutama sesuatu yang ingin dia capai karena untuk mencapai kesuksesan dari apa yang diinginkan terkadang selalu disertai dengan gejolak psikologis. Kecemasan perlu dimiliki seumur hidup, tetapi jika kecemasan yang ada dalam diri individu menjadi berlebihan, maka itu akan berubah menjadi tidak normal. Dalam kasus kecemasan, mungkin lebih baik untuk memperkuat aktivitas parasimpatis di luar titik keseimbangan untuk memaksimalkan relaksasi. <p> Tujuan ini dapat dicapai dengan menggunakan deep and slow breathing,  sebuah metode yang ditandai dengan durasi pernafasan yang lebih lama daripada durasi inhalasi. Selama inhalasi, pusat kardiovaskular menghambat aliran keluar vagal, sehingga menghasilkan dominasi simpatik yang mempercepat detak jantung. Sebaliknya, selama pernafasan, aliran keluar vagal dipulihkan dan mengakibatkan perlambatan detak jantung.</p>",
          
        },
        {
          title: "Deep Breathing",
        
          content: "Hal tersebut juga dapat dilakukan dengan teknik tarik napas dalam atau deep breathing techniques. Teknik relaksasi pernapasan dalam adalah teknik yang digunakan oleh individu untuk memberikan kontrol diri ketika ada ketidaknyamanan atau stres fisik atau emosional. Tujuan dari teknik relaksasi pernapasan dalam adalah untuk meningkatkan ventilasi alveoli, mempertahankan pertukaran gas, mencegah atelektasis paru, meningkatkan efisiensi batuk, mengurangi stres baik stres fisik maupun stres emosional yang mengurangi intensitas nyeri dan mengurangi kecemasan. Teknik relaksasi mengarahkan individu dengan pengendalian diri ketika kecemasan terjadi. ",
          
        },
        {
          title: "Deep Breathing",
          
          content: "Teknik pernapasan 4-4-4 merupakan salah satu teknik pernapasan yang lebih mudah untuk dilakukan. Dengan teknik ini membantu menurunkan kecemasan dan mengurangi stress karena dapat mengalihkan pikiran. Berikut cara melakukan teknik pernapasan 4-4-4: <p>1.Tarik napas lalu buang saat menghitung 4. <p> 2. Tahan napas anda selama 4 detik. <p>3. Tarik napas anda hingga hitungan 4.<p> 4. Buang napas anda selama 4 detik</p>.<p>Lalukan cara tersebut secara berulanng hingga Anda merasa tenang, beberapa putaran teknik pernapasan ini akan membantu dalam menjaga detak jantung tetap rendah dan mengalihkan pikiran anda dari situasi yang memicu kecemasan. Anda juga dapat melakukan teknik pernapasan dengan 4-7-8, prosesnya sama hanya berberda pada bagian tahan napas selama 7 detik dan buang napas selama 8 detik. Anda bisa memilih teknik yang dirasa lebih nyaman saat mencoba melakukannya.  ",
          
        },
        {
          title: "Referensi",
          
          content: " Ariga, R. A. (2019). Decrease anxiety among students who will do the objective structured clinical examination with deep breathing relaxation technique. Open Access Macedonian Journal of Medical Sciences, 7(16), 2619–2622. https://doi.org/10.3889/oamjms.2019.409 <p>Bontula, A., Preston, R. C., Shannon, E., Wilson, C., & Fitter, N. T. (2023). Deep Pressure Therapy: A Promising Anxiety Treatment for Individuals With High Touch Comfort? IEEE Transactions on Haptics, 16(4), 549–554. https://doi.org/10.1109/TOH.2023.3272623 <p>Khng, K. H. (2017). A better state-of-mind: deep breathing reduces state anxiety and enhances test performance through regulating test cognitions in children. Cognition and Emotion, 31(7), 1502–1510. https://doi.org/10.1080/02699931.2016.1233095 <p>Magnon, V., Dutheil, F., & Vallet, G. T. (2021). Benefits from one session of deep and slow breathing on vagal tone and anxiety in young and older adults. Scientific Reports, 11(1). https://doi.org/10.1038/s41598-021-98736-9<p>Perciavalle, V., Blandini, M., Fecarotta, P., Buscemi, A., Di Corrado, D., Bertolo, L., Fichera, F., & Coco, M. (2017). The role of deep breathing on stress. Neurological Sciences, 38(3), 451–458. https://doi.org/10.1007/s10072-016-2790-8<p> Timothy J. Legg, PhD, PsyD, (2023, March 22). 8 Breathing Exercises to Try When You Feel Anxious. Healthline. https://www.healthline.com/health/breathing-exercises-for-anxiety",
          
        }
      ],
      hypnosis: [
        {
          title: "Hypnosis",
          
          content: "Dalam konteks psikologis, hipnosis sering digunakan untuk membantu individu mengatasi berbagai masalah, termasuk kecemasan dan stres. Hypnosis dapat membantu individu memperoleh kontrol yang lebih besar terhadap respons tubuh dan pikirannya, membawa mereka pada keseimbangan emosional yang lebih baik. Stres yang berkepanjangan dapat merusak keseimbangan tubuh, memicu reaksi fisiologis seperti peningkatan detak jantung, ketegangan otot, dan peningkatan hormon stres (seperti kortisol), yang pada akhirnya dapat menyebabkan gangguan kesehatan fisik dan mental. Hypnosis adalah suatu keadaan di mana perhatian seseorang sangat terfokus, sementara kesadaran terhadap lingkungan sekitar menjadi berkurang, dan kondisi ini membuat seseorang lebih mudah merespons sugesti. Fokus dalam memperoleh kondisi pikiran yang rileks merupakan aspek utama hypnosis karena relaksasi terbukti efektif dalam mengurangi kecemasan. ",
  
        },
        {
          title: "Hypnosis",
          
          content: "Hipnosis memiliki tiga komponen utama: penyerapan, disosiasi, dan sugestibilitas. Penyerapan berarti kemampuan untuk sangat fokus dan tenggelam dalam pengalaman atau imajinasi, misalnya seperti saat dalam kondisi  menikmati sebuah cerita atau film. Disosiasi adalah proses pemisahan diri secara mental dari lingkungan sekitar, misalnya saat  merasa seperti  sedang berada di tempat lain dalam pikiran . Sugestibilitas berarti seberapa mudah merespons atau mengikuti petunjuk atau saran dari orang lain. Dalam beberapa kondisi Hypnosis dapat dilakukan oleh individu itu sendiri, yang dapat memanfaatkan imajinasi untuk mengurangi kecemasan atau stres, meningkatkan ketenangan, dan mengubah pola perilaku yang merugikan. Self-hypnosis adalah proses mengarahkan pikiran dan tubuh untuk masuk ke dalam keadaan yang sangat rileks dan fokus tanpa bantuan terapis. ",
  
        },
        {
          title: "Hypnosis",
          
          content: "Self-hypnosis bekerja dengan mengakses bagian bawah sadar untuk mengubah reaksi emosional dan fisik terhadap situasi yang menyebabkan kecemasan. Berikut adalah cara Melakukan Self-Hypnosis untuk Kecemasan :<p>1. Duduk dengan nyaman di tempat yang tenang, Anda dapat melakukan terapi ini dimanapun tetapi tetap bebas gangguan agar membantu fokus Anda. <p>2. Bernafaslah dalam-dalam selama beberapa saat, berirama dan lakukan dengan perlahan-lahan. Anda dapat menggunakan teknik pernapasan 4-4-4. <p>3. Banyangkan diri anda berada disuatu tempat yang memberi anda kenyamanan dan ketenangan, tidak harus tempat yang pernah dikunjungi. Anda dapat membayangkan tempat apapun yang memberikan Anda ketenangan dan kebahagiaan. <p>4. Libatkan seluruh indra Anda, seperti mencium wangi yang anda sukai untuk mengenang kenangan, rasakan air laut diwajah Anda, dan lainnya. <p>5. Berikan sugesti Positif pada diri. <p>6. Pilihlah afirmasi atau kata-kata positif yang menurut anda perlu saat ini, seperti “Saya kuat” atau “Saya hebat” atau “Saya cantik” dan kata-kata afirmasi lainnya.  ",
  
        },
        {
          title: "Hypnosis",
          
          content: "Self-hypnosis dapat menjadi alat yang efektif untuk mengelola kecemasan dan stres, dengan membantu menenangkan pikiran dan tubuh. Teknik ini dapat meningkatkan kemampuan Anda untuk mengendalikan respons terhadap kecemasan dan memberikan perasaan kedamaian serta kontrol pada diri. Latihan secara teratur dan konsistensi sangat penting untuk mencapai hasil yang maksimal. Tetapi perlu di ingat self-hypnosis tidak boleh digunakan sebagai pengganti pengobatan medis atau terapi psikologis yang diperlukan. Jika kecemasan sangat parah atau berlangsung lama, sangat penting untuk mencari dukungan dari seorang profesional.   ",
  
        },
        {
          title: "Referensi",
          
          content: "Rousseaux, F., Faymonville, M. E., Nyssen, A. S., Dardenne, N., Ledoux, D., Massion, P. B., & Vanhaudenhuyse, A. (2020). Can hypnosis and virtual reality reduce anxiety, pain and fatigue among patients who undergo cardiac surgery: a randomised controlled trial. Trials, 21(1), 330. https://doi.org/10.1186/s13063-020-4222-6 <p>Fisch S, Trivaković-Thiel S, Roll S, Keller T, Binting S, Cree M, Brinkhaus B, Teut M. Group hypnosis for stress reduction and improved stress coping: a multicenter randomized controlled trial. BMC Complement Med Ther. 2020 Nov 13;20(1):344. doi: 10.1186/s12906-020-03129-6. PMID: 33187503; PMCID: PMC7664040.<p> Leo, D. G., Keller, S. S., & Proietti, R. (2024). 'Close your eyes and relax': the role of hypnosis in reducing anxiety, and its implications for the prevention of cardiovascular diseases. Frontiers in psychology, 15, 1411835. https://doi.org/10.3389/fpsyg.2024.1411835 <p> Timothy J. Legg, PhD, PsyD, (2018, August 31). How to Perform Self-Hypnosis for Anxiety. Healthline. https://www.healthline.com/health/mental-health/self-hypnosis-for-anxiety",
  
        },
        // Add more articles for hypnosis
      ],
      meditation: [
        {
          title: "Meditation ",
       
          content: "Mindfulness adalah konsep penting dalam praktik meditasi Buddha, yang menjadi berpengaruh di Barat melalui adopsi dalam teknik psikoterapi, mungkin yang paling terkenal adalah Mindfulness‐Based Stress Reduction Program karya Jon Kabat‐Zinn. Meditasi mindfulness dapat dikatakan menginduksi keadaan kesadaran yang berubah, dalam arti yang lemah, melalui perubahan fokus perhatian, misalnya terhadap keadaan tubuh. Mindfulness digambarkan sebagai pergeseran perspektif dan pelepasan terhadap sensasi dan pikiran, membiarkan seseorang menerima daripada menghindari hal yang tidak menyenangkan. Mindfulness-based stress reduction (MBSR). yang dikembangkan oleh Kabat-Zinn pada tahun 1970-an adalah modalitas meditasi kesadaran yang paling banyak digunakan.",
          
          video: "https://youtu.be/j734gLbQFbU?si=nGujmyD7VpFJi0fY"
        },
        {
          title: "Meditation ",
       
          content: "Istilah meditasi mencakup semua praktik pelatihan yang dirancang untuk menyadari proses mental dan tubuh, yang dapat dikelompokkan menjadi dua jenis yang lebih luas: praktik kesadaran konsentratif dan terbuka. Jenis pertama mengharuskan perhatian diarahkan dan dipertahankan secara sukarela terhadap objek internal atau eksternal (misalnya, kesadaran napas, sensasi tubuh, mantra musik). Sebaliknya,  jenis yang kedua menyiratkan membiarkan perhatian, tidak ada objek perhatian yang dipilih sebelumnya. Ketika meditasi mencakup wawasan, perhatian meluas untuk mempertimbangkan sifat-sifat keadaan mental, seperti kefanaan atau kepemilikan yang dirasakan, yang relevan dengan analisis Buddhis tentang perkembangan. Meditator pemula sering kali diperkenalkan dengan teknik perhatian terfokus sebelum pemantauan terbuka, karena keterampilan metakognitif yang dikembangkan oleh meditasi perhatian terfokus dapat membantu pemantauan terbuka. ",
         
          video: "https://youtu.be/cyMxWXlX9sU?si=EMr5G7t3NowgM1mR"
        },
        {
          title: "Meditation ",
       
          content: "Untuk pemula, Anda bisa menetapkan waktu yang akan Anda gunakan untuk melakukan meditasi. Apabila tidak, Anda akan memiliki keinginan untuk cepat berhenti selama melakukan meditasi, sehingga pemula sebaiknya memulai dengan waktu yang singkat (5 sampai 10 menit saja). Lalu Anda bisa lakukan secara bertahap dengan dua kali dari waktu sebelumnya, hingga mencapai 45 menit atau bahkan satu jam. Lakukan meditasi ini pada pagi, sore, atau bahkan keduanya. Saat melakukan meditasi pilih tempat yang sekiranya jauh dari gangguan dan kebisingan. Berikut salah satu cara melakukan meditasi: <p>1.  Lakukan dalam posisi duduk, Anda bisa duduk dimanapun (dikursi, bantal meditasi, ditaman, atau tempat lainnya yang memberikan anda ketenangan). <p>2. Perhatikan posisi kaki Anda (Bila diatas bantal meditasi atau matras, duduklah seperti posisi yoga. Apabila Anda duduk diatas kursi, sebaiknya telapak kaki menyantuh lantai).<p>3. Tubuh posisi tegak tetapi tidak kaku.<p>4. Posisikan tangan diatas kaki atau paha Anda.<p>5. Turunkan dagu sedikit dan biarkan pandangan Anda kebawah atau dengan menutup mata.<p>6. Tenangkan diri sejenak, fokuskan perhatian pada pernapasan atau sensasi tubuh.<p>7. Rasakan napas saat menarik dan membuang napas. <p>8. Perhatian Anda akan pergi “berpetualang”, saat Anda tersadar pikiran Anda kembalikan perhatian pada pernapasan.<p>9. Berlatih untuk berhenti sejenak sebelum melakukan gerakan fisik apapun. <p>10. Teruslah untuk fokus pada pikiran dan coba untuk membayangkan “berpetualang” ke situasi yang membuat Anda tenang.<p>11. Setelah dirasa cukup, mulai angkat lengan dengan perlahan dan bukalah mata Anda. Diam sejenak untuk memperhatikan suara-suara di sekitar Anda, sensasi pada tubuh Anda, pikiran dan emosi Anda. ",
      
          video: "https://youtu.be/O-6f5wQXSu8?si=pdrlNQXD8cK3hT1i"
        },
        {
          title: "Referensi",
       
          content: "Bostock, S., Crosswell, A. D., Prather, A. A., & Steptoe, A. (2019). Mindfulness on-the-go: Effects of a mindfulness meditation app on work stress and well-being. Journal of Occupational Health Psychology, 24(1), 127–138. https://doi.org/10.1037/ocp0000118<p>González-Valero, G., Zurita-Ortega, F., Ubago-Jiménez, J. L., & Puertas-Molero, P. (2019). Use of meditation and cognitive behavioral therapies for the treatment of stress, depression and anxiety in students. A systematic review and meta-analysis. In International Journal of Environmental Research and Public Health (Vol. 16, Issue 22). MDPI AG. https://doi.org/10.3390/ijerph16224394<p>Green, A. A., & Kinchen, E. V. (2021). The Effects of Mindfulness Meditation on Stress and Burnout in Nurses. In Journal of Holistic Nursing (Vol. 39, Issue 4, pp. 356–368). SAGE Publications Inc. https://doi.org/10.1177/08980101211015818<p>Huberty, J., Green, J., Glissmann, C., Larkey, L., Puzia, M., & Lee, C. (2019). Efficacy of the mindfulness meditation mobile app “calm” to reduce stress among college students: Randomized controlled trial. JMIR MHealth and UHealth, 7(6). https://doi.org/10.2196/14273<p>Lyzwinski, L. N., Caffery, L., Bambling, M., & Edirippulige, S. (2019). The mindfulness app trial for weight, weight-related behaviors, and stress in university students: Randomized controlled trial. JMIR MHealth and UHealth, 7(4). https://doi.org/10.2196/12210<p>Mindful. (2023, 06 January). Mindfulness Meditation: How to Do It. https://www.mindful.org/mindfulness-how-to-do-it/ ",
          
          video: "https://youtu.be/vj0JDwQLof4?si=KW0C4p0G-wBNww36"
        },
        {
          title: "Meditation ",
          content:"Referensi Video",
          video: "https://youtu.be/1ZYbU82GVz4?si=t0cNUmyQlZPxpP1N"
        },
        {
          title: "Meditation ",
          content:"Referensi Video",
          video: "https://youtu.be/U9YKY7fdwyg?si=XEd61-5VqLzItdeU"
        },
        {
          title: "Meditation ",
          content:"Referensi Video",
          video: "https://youtu.be/oqJh0-71q8U?si=ANqGV_3I2udxft-v"
        },
        {
          title: "Meditation ",
          content:"Referensi Video",
          video: "https://youtu.be/ozaFsRbcC4o?si=kT2-vC-QUZqfSodI"
        },
        {
          title: "Meditation ",
          content:"Referensi Video",
          video: "https://youtu.be/4wKh265mCiA?si=y1JIGH0WsFyvJj_G"
        },
        // Add more articles for meditation
      ]
    };

    function renderArticles(section, containerId, paginationId, itemsPerPage = 1) {
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
            <div class="card-body">
  <h1 class="article-title">${article.title || 'Untitled Article'}</h1>
  
  <p class="article-content">${article.content || 'No content available.'}</p>
  ${article.pdf ? `<a class="btn btn-secondary" href="${article.pdf}" download="${article.title}.pdf">Download PDF</a>` : ''}
  ${article.video ? `
    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseVideo${start + index}" aria-expanded="false" aria-controls="collapseVideo${start + index}">
      Watch Video
    </button>
    <div class="collapse collapse-video" id="collapseVideo${start + index}">
      <iframe 
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

      function updatePagination() {
  pagination.innerHTML = "";

  // Previous button
  const prevItem = document.createElement('li');
  prevItem.className = 'page-item';
  if (currentPage === 1) prevItem.classList.add('disabled'); // Disable if on the first page
  prevItem.innerHTML = `
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
    </a>`;
  prevItem.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      displayPage(currentPage);
      updatePagination();
    }
  });
  pagination.appendChild(prevItem);

  // Page numbers
  for (let i = 1; i <= totalPages; i++) {
    const pageItem = document.createElement('li');
    pageItem.className = 'page-item';
    if (i === currentPage) pageItem.classList.add('active');
    pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
    pageItem.addEventListener('click', () => {
      currentPage = i;
      displayPage(currentPage);
      updatePagination();
    });
    pagination.appendChild(pageItem);
  }

  // Next button
  const nextItem = document.createElement('li');
  nextItem.className = 'page-item';
  if (currentPage === totalPages) nextItem.classList.add('disabled'); // Disable if on the last page
  nextItem.innerHTML = `
    <a class="page-link" href="#" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
    </a>`;
  nextItem.addEventListener('click', () => {
    if (currentPage < totalPages) {
      currentPage++;
      displayPage(currentPage);
      updatePagination();
    }
  });
  pagination.appendChild(nextItem);
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

    document.getElementById('deepBreathingBtn').click(); // Automatically show Deep Breathing content on load
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
