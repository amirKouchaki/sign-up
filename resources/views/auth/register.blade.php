<x-signup-layout>
    <form name="sign up" action="/register" method="POST">
        @csrf
        <label>Sign up</label>
        <div class="name">
            <div class="firstname">
                <label>First name</label>
                <input type="text" name="first_name" id="first-name" value="{{old('first_name')}}"/>
            </div>
            <div class="lastname">
                <label>Last name</label>
                <input type="text" name="last_name" id="last-name" value="{{old('last_name')}}"/>
            </div>
        </div>
        <div class="username">
            <label>Username</label>
            <input type="text" name="username" id="username" value="{{old('username')}}"/>
        </div>
        <div class="password">
            <label>Password</label>
            <input type="text" name="password" id="password" value=""/>
        </div>
        <div class="email">
            <label>Email</label>
            <input type="text" name="email" id="email" value="{{old('email')}}"/>
        </div>
        @forelse($errors->all() as $error)
            <div style="color: red;font-size: medium;">{{$error}}</div>
        @empty
        @endforelse
        <button type="submit">Sign up</button>
    </form>
</x-signup-layout>
