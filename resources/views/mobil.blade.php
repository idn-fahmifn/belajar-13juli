<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo ini adalah halaman mobil.</h1>
    <p>detail lengkap mobil, <a href="{{route('halaman.detail', 'avanza')}}">avanza</a> </p>
    <p>detail lengkap mobil, <a href="{{route('mobil.sport')}}">Sport</a> </p>

    <form action="{{route('proses.mobil')}}" method="post">
        @csrf
        <div class="">
            <label for="">nama mobil</label>
            <input type="text" name="name" required>
            @error('name')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <label for="">tipe mobil</label>
            <input type="text" name="tipe" required>
            @error('tipe')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <label for="">warna</label>
            <input type="text" name="warna" required>
            @error('warna')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <label for="">kapasitas bahan bakar</label>
            <input type="number" name="bahan_bakar" required>
            @error('bahan_bakar')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror
        </div>
        
        <div class="">
            <label for="">Jenis Mobil</label>
            <select name="jenis" id="jenis" required>
                <option value="suv">SUV</option>
                <option value="electric">electric</option>
                <option value="hybrid">hybrid</option>
            </select>
            @error('jenis')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <button type="submit">Kirim data</button>
        </div>
    </form>

</body>
</html>