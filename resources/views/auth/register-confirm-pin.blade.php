<x-app-layout title="Reg - ConfPin" :navbar-top="false" :navbar-bottom="false">

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('auth/css/login.css') }}">
    </x-slot>

    <x-brand-header />

    <main class="bg-primary  w-100  pt-5" style="height: 100vh">

        <div class="text-center ">
            <p class="text-white mb-4">Konfirmasi <span class="fw-bold">Nomor PIN</span> kamu untuk lanjut</p>
            <form method="POST" class="mt-4 text-center position-relative w-100"
                action="{{ route('register.storeAndLogin') }}" id="form-email"> @csrf
                <div class="input-group px-5">
                    <span class="input-group-text bg-white py-0">PIN
                    </span>
                    <input name="confirm_pin_number" type="password"
                        class="form-control bg-white text-dark @error('confirm_pin_number') is-invalid @enderror"
                        placeholder="123456">
                </div>
                <x-auth.input-error-alert error="confirm_pin_number" />
            </form>

            <p class="text-white text-center mx-auto px-4 text-break mt-4" style="width: 90%">
                Dengan melanjutkan, kamu setuju dengan <span class="fw-bold">Syarat & Ketentuan</span> dan
                <span class="fw-bold">Kebijakan Privasi</span> kami
            </p>

            <div class="d-flex justify-content-between">
                <a href="{{ route('register.create') }}"
                    class=" text-decoration-none  font-monospace cursor-pointer text-white fw-bold m-5">
                    < KEMBALI</a>
                        <a onclick="submitForm()"
                            class="cursor-pointer text-decoration-none  font-monospace cursor-pointer text-white fw-bold  m-5">
                            LANJUT ></a>
            </div>
        </div>
    </main>

</x-app-layout>
