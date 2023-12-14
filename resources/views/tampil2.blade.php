<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pooper.js@1.14.7/dist/umd/pooper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

<center>
    <h2>Data Mahasiswa</h2>
    <hr />
    <table class="table table-dark" style="width:50%; table-align:center;">
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NIM</td>
                <td>{{$data['nim']}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>NAMA</td>
                <td>{{$data['nama']}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>UMUR</td>
                <td>{{$data['umur']}}</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>EMAIL</td>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>ALAMAT</td>
                <td>{{$data['alamat']}}</td>
            </tr>
        </tbody>
    </table>
</center>
<hr />
<?php

foreach($dataAll as $datax) {
    echo "<tr>";
        echo "<td>";
            echo $datax->nim;
        echo "</td>";

        echo "<td>";
            echo $datax->nama;
        echo "</td>";
            echo "<td>";
        echo $datax->umur;
            echo "</td>";
        echo "</tr>";
            echo $datax->email;
        echo "</td>";
            echo $datax->alamat;
        echo "</td>";
    echo "</tr>";
        }
?>
</tbody>
</table>