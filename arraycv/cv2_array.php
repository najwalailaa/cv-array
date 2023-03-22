<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Najwa Laila cv</title>
        <link rel="stylesheet" href="file.css">
    </head>
    <body>

       <?php
        $education=array(
            array('instansi'=>'Universitas Pembangunan Nasional “Veteran” Jawa Timur', 'bidang'=>' - Bacelor in Informatic'),
            array('instansi'=>'SMA Negeri 2 Nganjuk (2018 - 2021)','bidang'=>' - Sains'),
            array('instansi'=>'SMP Negeri 1 Prambon','bidang'=>' ')
        );

        $skill=array(
            array('skill1'=>'Java'),
            array('skill1'=>'C'),
            array('skill1'=>'HTML'),
            array('skill1'=>'PHP'),
            array('skill1'=>'Communicative'),
            array('skill1'=>'Teamwork')
        );
        $contact=array(
            array('c1'=>'whatsapp: ', 'isi'=>'wa.me/085715'),
            array('c1'=>'instagram: ','isi'=>'instagram.com/najwwalailaa'),
            array('c1'=>'github: ', 'isi'=>'github.com/najwalailaa'),
            array('c1'=>'alamat: ', 'isi'=>'Nganjuk, East  Java')
        );
        $nama = 'Najwa Laila Anggraini';
        $page2 = '02';
        $experience1 ='(SECRETARY of DEPARTMENT PENDIDIKAN HIMATIFA 2022/2023), (HIMATIFA UPN JATIM)';
        $experience2 ='(TREASURER), (HIMATIFA DESIGN CONTEST)';
        $experience3 ='(SECRETARY), (IT CAMP x FOWTEDU 2023)';
        $experience4 ='(SECRETARY), (KULIAH TAMU HIMATIFA 2022)';
        $experience5 ='(STAFF PERKAP), (PORSIMNAS UPN 2022)';
        $experience6='(PART OF BRAND AMBASSADOR MAJU INDONESIA)';

        $experiences1=array(
            array('jobdesc1'=>' Organizing files and letter,', 'jobdesc2'=>' Preparing documents,', 'jobdesc3'=>' Supports the management and administration with tasks and clerial duties to increas the effeciency of the department workflow,', 'jobdesc4'=>' Help in providing information to staff department,','jobdesc5'=>' Schedulling appointments,','jobdesc6'=>' Help edit, copy, transcribe, format, retrieve and transmit data, text, and graphics')
        );

        $experiences2=array(
            array( 'jobdesc1'=>' Financial planning and budgeting', 'jobdesc2'=>' Financial reporting.', 'jobdesc3'=>' ', 'jobdesc4'=>' ', 'jobdesc5'=>' ')
        );

        $experiences3=array(
            array('jobdesc1'=>' Organizing files and letter,', 'jobdesc2'=>' Preparing documents,', 'jobdesc3'=>' Lead the meet,', 'jobdesc4'=>' Schedulling appointments,', 'jobdesc5'=>' Invite partnership)')
        );

        $experiences4=array(
            array( 'jobdesc1'=>' Organizing files and letter,', 'jobdesc2'=>' Preparing documents,', 'jobdesc3'=>' Lead the meet,', 'jobdesc4'=>' Schedulling appointments,', 'jobdesc5'=>' Invite partnership)')
        );

        $experiences5=array(
            array( 'jobdesc1'=>' Prepare all the necessary equipment,', 'jobdesc2'=>' A price survey with multiple stores) ','jobdesc3'=>' ', 'jobdesc4'=>' ', 'jobdesc5'=>' ')
        );
      
        $experiences6=array(
            array( 'jobdesc1'=>' Make informative videos,', 'jobdesc2'=>' Good relationship with other brand ambassador) ','jobdesc3'=>' ', 'jobdesc4'=>' ', 'jobdesc5'=>' ')
        );

        $project=array(
            array('namaprojek'=>'Program Sederhana : Review Film', 'waktu'=>'(Agustu 2022 - November 2022)'),
            array('namaprojek'=>'Remastering Linux', 'waktu'=>'(Juni 2022 - Agustus 2022)'),
        )
      ?>


      <?php
      echo '<div class="container">';
      echo '<div class="box2">';
      echo '';
      echo '<h2 class="education">EDUCATION</h2>';
      echo '<p class="ebox">';
      ?>

      <?php foreach($education as $pendidikan): ?>
            <br> <?php echo $pendidikan['instansi'], $pendidikan['bidang']?></br>
      <?php 
      endforeach; 
      ?>  

      <?php
      echo '</p>';
      echo '<h2 class="skill">PERSONAL SKILLS</h2>';
      echo '<p class ="sbox">';
      ?>

      <?php foreach ($skill as $skills): ?>
            <td><br><?php echo $skills['skill1']?></td></br>
      <?php 
      endforeach;
      ?>

      <?php
      echo '</p>';
      echo '<div class="box4">';
      echo '<h2 class="contact">CONTACT</h2>';
      echo '<p class="cbox">';
      echo '<a style="color:white" href="https://wa.me/+6285715743327" target="_blank">wa.me/08571</a>';
      echo '<br><a style="color: white;" href="https://www.instagram.com/najwwalailaa/" target="_blank">instagram.najwwalailaa</a></br>';
      echo '<a style="color: white;" href="https://github.com/najwalailaa" target="_blank">github/najwalailaa</a>';
      echo '<br><a style="color: white;" href="https://bit.ly/mapsnganjuk" target="_blank">Nganjuk, East Java</a></br>';
      echo '</div>';
      echo '</p>';
      echo '</div>';
      echo '<div class="boxbesar">';
      echo '<div class="font4">'.$page2.'</div>';
      echo '<div class="font5">'.$nama.'</div>';
      echo '<div class="org">ORGANIZATION EXPERIENCES';
      echo '<h2 class="orgbox1">'.$experience1.'</h2>';
      echo '<div class="orgbox2" >';
      ?>

      <?php foreach ($experiences1 as $pengalaman1): ?>
       <td><li> <?php echo $pengalaman1['jobdesc1'], $pengalaman1['jobdesc2'], $pengalaman1['jobdesc3'], $pengalaman1['jobdesc4'], $pengalaman1['jobdesc5']?></td></li>
      <?php 
      endforeach;
      ?>

      <?php
      echo '</div>';
      echo '<h2 class="orgbox1">'.$experience2.'</h2>';
      echo '<div class="orgbox2" >';
      ?>

      <?php foreach ($experiences2 as $pengalaman2): ?>
       <td><li> <?php echo $pengalaman2['jobdesc1'], $pengalaman2['jobdesc2'], $pengalaman2['jobdesc3'], $pengalaman2['jobdesc4'], $pengalaman2['jobdesc5']?></td></li>
      <?php 
      endforeach;
      ?>

      <?php
      echo '</div>';
      echo '<h2 class="orgbox1">'.$experience3.'</h2>';
      echo '<div class="orgbox2" >';
      ?>

      <?php foreach ($experiences3 as $pengalaman3): ?>
       <td><li> <?php echo $pengalaman3['jobdesc1'], $pengalaman3['jobdesc2'], $pengalaman3['jobdesc3'], $pengalaman3['jobdesc4'], $pengalaman3['jobdesc5']?></td></li>
      <?php 
      endforeach;
      ?>

      <?php
      echo '</div>';
      echo '<h2 class="orgbox1">'.$experience4.'</h2>';
      echo '<div class="orgbox2" >';
      ?>

      <?php foreach ($experiences4 as $pengalaman4): ?>
       <td><li> <?php echo $pengalaman4['jobdesc1'], $pengalaman4['jobdesc2'], $pengalaman4['jobdesc3'], $pengalaman4['jobdesc4'], $pengalaman4['jobdesc5']?></td></li>
      <?php 
      endforeach;
      ?>

    <?php
      echo '</div>';
      echo '<h2 class="orgbox1">'.$experience5.'</h2>';
      echo '<div class="orgbox2" >';
      ?>

      <?php foreach ($experiences5 as $pengalaman5): ?>
       <td><li> <?php echo $pengalaman5['jobdesc1'], $pengalaman5['jobdesc2'], $pengalaman5['jobdesc3'], $pengalaman5['jobdesc4'], $pengalaman5['jobdesc5']?></td></li>
      <?php 
      endforeach;
      ?>

    <?php
      echo '</div>';
      echo '<h2 class="orgbox1">'.$experience6.'</h2>';
      echo '<div class="orgbox2" >';
      ?>

      <?php foreach ($experiences6 as $pengalaman6): ?>
       <td><li> <?php echo $pengalaman6['jobdesc1'], $pengalaman6['jobdesc2'], $pengalaman6['jobdesc3'], $pengalaman6['jobdesc4'], $pengalaman6['jobdesc5']?></td></li>
      <?php 
      endforeach;
      ?>

      <?php
      echo '</div>'; 
      echo '<div class = "org1"> PROJECT EXPERIENCES ';
      echo '<div class="orgbox2" >';
      ?> 

      <?php foreach($project as $projek): ?>
        <li> <?php echo $projek['namaprojek'], $projek['waktu']?></li>
        <?php 
        endforeach;
        ?>

      <?php
      echo '</div>';
      echo '<a style="margin-left: 200px;" href="page1.php"><button>back</button></a>';
      echo '</div>';
      echo '</div>';
      ?>

    </body>
    </html>