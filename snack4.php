<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi.
  Ogni punto un nuovo paragrafo. -->
<?php
 $paragraph ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ullam ipsam veritatis itaque ad esse aut, quidem, recusandae, totam sequi iusto. Voluptates cupiditate quisquam consequatur qui nostrum enim, blanditiis sequi.lo Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, repudiandae. Exercitationem neque reprehenderit sunt aut suscipit, et quam tenetur rerum. Consequuntur quos nesciunt esse hic eos laborum quod amet dicta";
 $phrases = explode(".", $paragraph);
 for ($i=0; $i < count($phrases); $i++): ?> 
    <p> <?= $phrases[$i]."." ?> </p>
 
 <?php endfor ?>