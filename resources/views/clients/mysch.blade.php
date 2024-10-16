@extends('master')
@section('title-page', 'Pelanggan MySCH.ID')

@section('content')

<form action="/update data" method="post">
        <!-- Package ID -->
        <label for="id"> ID:</label><br>
        <input type="text" id="id" name="id" required><br><br>

        <!-- Package Name -->
        <label for="name">Nama Pelanggan:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <!-- Package Type -->
        <label for="package_type">Package Type:</label><br>
        <select id="package_type" name="package_type" required>
            <option value="1">Profesional</option>
            <option value="2">Exclusive</option>
            <option value="3">Custom</option>
            <option value="4">yayasan</option>
        </select><br><br>

        <!-- Package Price -->
        <label for="domain">Domain</label><br>
        <input type="url" id="domain" name="domain" required><br><br>

      
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
@endsection