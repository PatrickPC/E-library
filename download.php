<?php
                if(!empty($_GET['file']))
                {
                    $filename = basename($_GET['file']);
                    $filepath = 'app/' . $filename;

                    if(!empty($filename) && file_exists($filepath))

                    header("Cache-Control: public");
		            header("Content-Description: FIle Transfer");
		            header("Content-Disposition: attachment; filename=$filename");
		            header("Content-Type: application/apk");
		            header("Content-Transfer-Emcoding: binary");

		            readfile($filepath);
		            exit;

	            }
	               

