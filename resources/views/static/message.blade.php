@extends('static.default')

@section('content')
    <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
    <div class="container" style="padding-top: 50px">
        <h5 class="text-center"><span class="h5-span">请您留言</span></h5>
        <div class="row" style="padding-top: 30px">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <label for="titleInput">留言标题</label>
                        <input type="text" class="form-control" id="titleInput" placeholder="必填">
                        <small id="namelHelp" class="form-text text-muted">我们会保护您的信息隐私。</small>
                    </div>
                    <div class="form-group">
                        <label for="nameInput">您的姓名</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="必填">
                    </div>
                    <div class="form-group">
                        <label for="emailInput">电子邮箱</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="必填">
                    </div>
                    <div class="form-group">
                        <label for="addressInput">联系地址</label>
                        <input type="text" class="form-control" id="addressInput">
                    </div>
                    <div class="form-group">
                        <label for="textInput">留言内容</label>
                        <textarea type="text" class="form-control" id="textInput"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                    <button type="reset" class="btn btn-light " style="position: absolute;right: 15px">重新填写</button>
                </form>
            </div>
        </div>

    </div>
    @endsection
