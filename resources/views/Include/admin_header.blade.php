
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASBOARD</title>
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <style>
        body{font-family: 'Barlow', sans-serif;}
        a:hover{text-decoration: none;}
        .border-left{border-left: 2px solid var(--primary) !important;}
        .sidebar{top: 0;left : 0;z-index : 100;overflow-y: auto;}
        .overlay{background-color: rgb(0 0 0 / 45%);z-index: 99;}

        /* sidebar for small screens */
        @media screen and (max-width: 767px){
        .sidebar{max-width: 18rem;transform : translateX(-100%);transition : transform 0.4s ease-out;}
        .sidebar.active{transform : translateX(0);}
        }
        .meanu_logo img{width:140px;height:100px;}
       .allcatagory{margin-left:18%;width: 80%;}
       .manage{height:auto;width:80%;margin-left:300px;}
</style>
</head>
