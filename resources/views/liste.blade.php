
<?php 
    $listes = json_decode($liste);
?>
@extends('layout.app')

@section('content')
    <h1>liste</h1>
    <table>
        <th>
            <tr>
                <td>nom</td>
                <td>prix</td>
            </tr>
        </th>
        {{$liste}}  
    </table>
@endsection