<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="center">
    <h1>
        <span>W</span>
        <span>e</span>
        <span>l</span>
        <span>c</span>
        <span>o</span>
        <span>m</span>
        <span>e</span>
    </h1>
    </div>
<div class="center">
<img src="{{ asset('assets/image/image2.gif') }}" alt="Description of the image" class="gif">
</div>
<div>
<table>
  <caption>Personal Info</caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>ID</th>
      <th>Batch</th>
      <th>Photo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>MD Mahedi Hasan Joy</td>
      <td>202902018</td>
      <td>202</td>
      <td><img src="{{ asset('assets/image/image1.jpg') }}" alt="Description of the image" class="photo"></td>
    </tr>
  </tbody>
</table>
</div>
<div>
    <table>
        <caption>Education</caption>
        <thead>
          <tr>
            <th>Name of the Institution</th>
            <th>Degree</th>
            <th>Passing Year</th>
            <th>Photo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Green University of Bangladesh</td>
            <td>B.Sc Engg in CSE</td>
            <td>2024</td>
            <td><img src="{{ asset('assets/image/GUB.png') }}" alt="Description of the image" class="photo"></td>
          </tr>
        </tbody>
      </table>
</div>

<div class="cv-preview">
    <h2>Curriculum Vitae (CV) Preview</h2>
    <p>Click <a href="{{ asset('assets/cv/Resume_of_MD_Mahedi_Hasan_Joy.pdf') }}" target="_blank">here</a> to open the CV in a new tab.</p>
</div>






