<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <x-inputs.input name="name" text="Nombre" />

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <x-buttons.button route="store()" text="Guardar" bgColor="purple-600" hover="purple-800"
                                class="
                                    inline-flex justify-center w-full border border-transparent text-base leading-6
                                    font-medium shadow-sm focus:outline-none focus:border-green-700
                                    focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <x-buttons.button route="cerrarModal()" text="Cancelar" bgColor="gray-200" hover="gray-500"
                                textColor="gray-700" hoverElement="text"
                                class="
                                    inline-flex justify-center w-full border border-transparent text-base leading-6
                                    font-medium shadow-sm focus:outline-none border-gray-300 focus:border-gray-200
                                    focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
