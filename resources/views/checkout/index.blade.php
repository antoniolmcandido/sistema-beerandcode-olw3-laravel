<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed top-0 left-0 hidden w-1/2 h-full lg:block bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed top-0 right-0 hidden w-1/2 h-full lg:block bg-tertiary-800" aria-hidden="true"></div>

        <div class="relative grid grid-cols-1 mx-auto max-w-7xl lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <section aria-labelledby="summary-heading"
                class="py-12 bg-tertiary-800 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
                <div class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.product-list>
                        <x-checkout.product-item
                            name="Plano Anual"
                            price="99,00"
                            :features="[
                                    'Acesso a todos os cursos',
                                    'Certificado de conclusão',
                            ]"
                            image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                        />
                    </x-checkout.product-list>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <x-checkout.summary-item title="Subtotal" value="99,00" />
                        <x-checkout.summary-item title="Frete" value="11,00" />
                        <x-checkout.summary-item title="Total" value="110,00" :is-last="true"/>
                    </dl>

                </div>
            </section>

            <section
                aria-labelledby="payment-and-shipping-heading"
                class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">

                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="Informações de contato" />

                            <div class="mt-6">
                                <x-input-label for="email-address" value="Email" />
                                <div class="mt-1">
                                    <x-text-input
                                        type="email"
                                        id="email"
                                        name="email"
                                        autocomplete="email"
                                        placeholder="Digite seu email"
                                    />
                                </div>
                            </div>

                            <div class="mt-10">
                                <x-section-title title="Detalhes do pagamento" />

                                <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                    <div class="col-span-3 sm:col-span-4">
                                        <x-input-label for="card-number" value="Número do cartão" />
                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="card-number"
                                                name="card-number"
                                                placeholder="Número do cartão"
                                            />
                                        </div>
                                    </div>

                                    <div class="col-span-2 sm:col-span-3">
                                        <x-input-label for="expiration-date" value="Data de expiração" />
                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="expiration-date"
                                                name="expiration-date"
                                                placeholder="MM/AA"
                                            />
                                        </div>
                                    </div>

                                    <div class="col-span-1 sm:col-span-1">
                                        <x-input-label for="cvc" value="CVC" />
                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="cvc"
                                                name="cvc"
                                                placeholder="CVC"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
