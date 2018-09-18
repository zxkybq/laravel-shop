<?php

namespace App\Providers;

use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use App\Events\OrderPaid;
use App\Listeners\UpdateProductSoldCount;
use App\Listeners\SendOrderPaidMail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        // 注册事件
        Registered::class => [
            RegisteredListener::class,
        ],
        
        OrderPaid::class => [
            // 订单完成支付后 更新销量
            UpdateProductSoldCount::class,
            // 订单完成支付后 邮件通知
            SendOrderPaidMail::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
