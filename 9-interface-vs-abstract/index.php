<?
// 继承能重用, 接口只能自己实现
interface Provider {
    public function authorize();    
}

function login(Provider $provider)
{
    $provider->authorize();
}
