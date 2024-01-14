<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve code and selected language from the form
    $code = $_POST['code'];
    $language = $_POST['language'];

    $tempFile = tempnam(sys_get_temp_dir(), 'program_code').'.cpp';
    file_put_contents($tempFile, $code);
    $readFile = file_get_contents($tempFile);
    echo "$tempFile . <br>";

    // Execute the program based on the selected language
    switch ($language) {
        case 'cpp':
            //echo "cpp output\n";
            $output = shell_exec("/usr/bin/c++ $tempFile -o /opt/tempFile.out");
            //echo "$tempFile.cpp";
            echo "executed";
            // if($output == null){
                
            // }
            if($output == false){
                echo "<br> . output false . <br>";
            }
            echo "$output";
            break;
        case 'java':
            $output = shell_exec("javac $tempFile && java -classpath " . escapeshellarg(dirname($tempFile)) . " " . escapeshellarg(basename($tempFile, '.java')));
            break;
        case 'python':
            $output = shell_exec("python3 $tempFile");
            break;
        case 'ruby':
            $output = shell_exec("ruby $tempFile");
            break;
        default:
            $output = "Invalid language selection.";
            break;
    }

    // Display the output
    //echo "output <br>"; 
    echo "$output";
    // Remove the temporary file
    unlink($tempFile);
}
?>
