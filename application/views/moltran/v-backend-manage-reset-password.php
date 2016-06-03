<?php
// echo "masuk";
// print_r($data);
foreach ($query->result() as $row)
{
	echo $row->EM_USERID;
	echo $row->EM_ID;
}