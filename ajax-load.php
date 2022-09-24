<?php 
$con = mysqli_connect('localhost','root','','digimasters') or die('Connect failled');

$query = 'SELECT * FROM courses';
$result = mysqli_query($con,$query) or die('faill');
$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table class="table table-hover table-bordered">
    <thead class="bg-primary">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        </thead>';
        while($row = mysqli_fetch_assoc($result)){
            $output .= " <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
        </tr>";
        }
        $output .="</table>";
        mysqli_close($con);
        echo $output;
}else{
    echo "<h2>Not Found !</h2>";
}

?>  