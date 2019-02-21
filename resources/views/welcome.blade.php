<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Scraper tool</title>
</head>
<style>
    body{
        margin: 0px;
        padding: 0px;
        background: #edfffa;
        background-size: cover;
    }

    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        padding: 40px;
        background: rgba(0,0,0,0.8);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,0.5);
        border-radius: 10px;
    }
    .box h2{
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;

    }
    .box .inputbox{
        position: relative;
    }
    .box .inputbox input{
        width: 100%;
        padding: 10px 0;
        letter-spacing: 2px;
        font-size: 15px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .box .inputbox label{
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 15px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;

    }
    .box .inputbox input:focus ~ label,
    .box .inputbox input:valid ~ label
    {
        top: -18px;
        left: 0;
        color: #59ecf4;
        font-size: 12px;
    }
    .box input[type="submit"]
    {
        background: transparent;
        border: none;
        outline: none;
        color:#fff;
        background:#59ecf4;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
</style>
<body>
  <div class="box">
      <h2>Web Scraper</h2>
      <form action="{{route('scrapers')}}" method="get">
          {{--@csrf--}}
          <button type="submit">data save</button>
      </form>
      <form action="{{route('url')}}" method="post">
          @csrf
          <div class="inputbox">
              <input type="url" name="url" required="">
              <label>Enter Site URL</label>
          </div>
          <div class="inputbox">
              <input type="number" name="number" placeholder="Current page" >
              <label>Total Pages</label>
          </div>

          <input type="submit" name="" value="Create">
      </form>
  </div>

</body>
</html>