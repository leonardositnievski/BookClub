<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.headers')

</head>
<body>
    <div class='wrapper'>
        <form action="{{route('login')}}" method="post" class="default">
            @csrf
            @if (session('erro'))
                <div class="alert alert-danger">
                    {{ session('erro') }}
                </div>
            @endif
            <h1>{{__('view.login')}}</h1>
            <div class="form-group">
                <x-Input name='username' :placeholder="__('view.username')" required/>
            </div>
    
            <div class="form-group">
                <x-Input name='password' :placeholder="__('view.password')"   type='password' icon='bi bi-eye-slash-fill password-hide' required />
            </div>
    
            <div class="form-group-buttons">
                <button type="submit">{{__('view.login')}}</button>
                <a href="{{route('criar-conta')}}">{{__('view.create-account.title')}}</a>
            </div>
    
           
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            Array.from(document.getElementsByClassName('password-hide')).map((el)=>{

                el.addEventListener('click',(e)=>{
                    const input = document.getElementsByName(e.target.getAttribute('for'))[0];
                    if(!input){
                        return
                    }
                    if(input.type === 'password'){
                        input.type = 'text'
                        e.target.classList.add("bi-eye-fill"); 
                        e.target.classList.remove("bi-eye-slash-fill");
                    }else{
                        input.type = 'password'
                        e.target.classList.remove("bi-eye-fill"); 
                        e.target.classList.add("bi-eye-slash-fill");
                    }

                    setTimeout(() => {
                        input.type = 'password'
                        e.target.classList.remove("bi-eye-fill"); 
                        e.target.classList.add("bi-eye-slash-fill");
                    }, 2000);
                });
            
        })})
    </script>
</body>
</html>