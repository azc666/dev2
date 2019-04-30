<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDF Document</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  {{-- @php
      // $user = App\User::all();
    $bcname = 'name2';
    $request->name = $bcname;
  @endphp --}}
  {{-- <span class="size"> --}}
    <p class="bc_name">{{ $request->name }}</p>
    <p class="bc_title">{{ $request->title }}, {{ $request->description }}</p>
    {{-- <p class="bc_title">Title, Description</p> --}}
    <p class="bc_email">{{ $request->email }}</p>
    <p class="bc_prop_website">{{ $request->property_website }}</p>
    <p class="bc_phone">Direct: {{ $request->direct }}
      <br>Office: {{ $request->office }}
      <br>Cell: {{ $request->cell }}
      <br>Fax: {{ $request->fax }}
    </p>
    @if ($request->address2)
      <p class="bc_address2">{{ $request->address }}
        <br>{{ $request->address2 }}
        <br>{{ $request->city }}, {{ $request->state }} {{ $request->zip }}
      </p>
    @else
      <p class="bc_address">{{ $request->address }}
        <br>{{ $request->city }}, {{ $request->state }} {{ $request->zip }}
      </p>
    @endif
    

    {{-- <p class="bc_footer">Tailored Commercial Real Estate, Capital, Insurance & Management Services<span class="bc_footer_website">&nbsp;&nbsp;|&nbsp;&nbsp;FranklinSt.com</span></p> --}}
  {{-- </span> --}}
</body>

</html>
