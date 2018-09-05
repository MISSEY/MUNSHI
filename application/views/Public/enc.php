<?php echo $hash; 
$plaintext_string = $this->encrypt->decode($hash);
echo $plaintext_string;
?>