<!DOCTYPE html>
@extends('layouts.layout')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @section('title')
    <body class="antialiased">
        <p>hello {{ $user }}</p>
      <?php
        echo ('これはテストです');
      ?>                

    </body>
</html>
    </head>