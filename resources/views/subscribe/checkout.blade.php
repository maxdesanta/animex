@extends('layouts.subscribe')
@section('title', 'checkout detail')

@section('content')
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lg p-6 md:p-8">
        <!-- Header -->
        <h2 class="text-2xl font-bold text-gray-800 text-center">Checkout</h2>
        <p class="text-gray-500 text-center mt-1">Complete your purchase</p>

        <!-- Product Details -->
        <div class="mt-6 flex items-center space-x-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Paket {{$plan->title}}</h3>
            </div>
        </div>

        <!-- Price Breakdown -->
        <div class="mt-6 space-y-3">
            <div class="flex justify-between text-gray-600">
                <span>Subtotal</span>
                <span>Rp {{ number_format($plan->price, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between text-gray-600">
                <span>Tax</span>
                <span class="text-green-500">Free</span>
            </div>
            <div class="flex justify-between font-semibold text-gray-800">
                <span>Total</span>
                <span>Rp {{ number_format($plan->price, 0, ',', '.') }}</span>
            </div>
        </div>

        <!-- Checkout Button -->
        <form action="{{ route('subscription.process') }}" method="post">
            @csrf
            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
            <input type="hidden" name="price" value="{{ $plan->price }}">
            <button type="submit" class="mt-6 w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                Complete Purchase
            </button>
        </form>
    </div>
@endsection