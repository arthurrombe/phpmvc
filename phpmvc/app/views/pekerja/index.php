<div class="container mt-5">
 <div class="row">
    <div class="col-6">
        <h3>
            daftar pekerja
        </h3>
        
           

               
                <?php foreach($data['mhs'] as $mhs ) : ?>
                    <ul>
                    <li><?= $mhs['nama']; ?> </li>
                    <li><?= $mhs['nrp']; ?> </li>
                    <li><?= $mhs['email']; ?> </li>
                    <li><?= $mhs['golongan']; ?> </li>
                  </ul>
 
</ul>

  
  <?php endforeach; ?>
 

                </li>
 

  
    

    </div>
 </div>
</div>