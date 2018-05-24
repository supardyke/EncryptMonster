# Encryption Monster
A simple php library that handles encrytion for md5 and hash algorithm, One way encrytion and one way confirmation check.
More updates to come

Load the php library

pass the text to method
$this->enc->md5($text);
$this->enc->hash($text);

get the response as the encrypted value of the variable
$check = $this->enc->md5($text);
$check = $this->enc->hash($text);

to check a text against an md5 or hashed text is quite simple
$check = $this->enc->check_md5($text,$hashed_text);
$check = $this->enc->check_hash($text,$hashed_text);

remember check is a bool value to tell you if the text will give you the encrypted equivalent when encrypted with same algorith

LIKE WHAT I DO?

FOLLOW ME ON GITHUB @SUPARDYKE AND STAR MY PROJECTS 