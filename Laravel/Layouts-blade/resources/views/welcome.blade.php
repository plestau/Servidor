@section('title', 'Home')

<h1>Welcome to my blog!</h1>
<div class="d-flex">
    <a class="btn-outline-success" href="/vista1">vista 1</a>
    <a class="btn-outline-success" href="/vista2">vista 2</a>
</div>

<style>
    .btn-outline-success {
        margin: 0 10px;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 95vh;
        background-color: #f5f5f5;
    }
    #title {
        text-align: center;
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>