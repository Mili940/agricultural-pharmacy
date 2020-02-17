<template>
    <div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col mb-3">
                <label>Cena Porudzbine:</label>
                <input class="input" v-model.number="total" type="number" name="price_order" placeholder="Cena porudzbine RSD">
            </div>
            <div class="flex flex-col mb-3">
                <label>Placeno:</label>
                <div>
                    <label class="radio">
                        <input type="radio" name="payed" value="1">
                        Da
                    </label>
                    <label class="radio">
                        <input type="radio" name="payed" value="0">
                        Ne
                    </label>
                </div>
            </div>
            <div class="flex justify-end my-10">
                <a @click="addItem" class="btn-confirm text-white flex items-center justify-center cursor-pointer">Novi preparat</a>
            </div>
        </div>
        <div  v-for="(item, i) in items" :key="i" v-model="item.value" class="flex justify-between items-center mb-8">
            <div class="flex flex-col">
                <label>Preparat:</label>
                <select
                    name="product[]"
                    class="input-select"
                >
                    <option v-for="product in products" :key="product.id" :value="product.id">{{ product.name }}</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label>Kolicina:</label>
                <input v-model.number="item.quantity" class="input" type="text" name="quantity[]" placeholder="Kolicina">
            </div>
            <div class="flex flex-col">
                <label>Cena:</label>
                <input v-model.number="item.price" class="input" type="number" name="price[]" value="" placeholder="Cena RSD">
            </div>
            <div class="flex flex-col">
                <label>Ukupna cena preparata:</label>
                <input class="input" type="number" v-model.number="subtotal[i]" name="subtotal[]">
            </div>
            <div
                v-tooltip="lastItems ? 'Cant delete': ''"
                @click="removeItems(i)"
                class="mt-8"
            >
                <svg aria-hidden="true" width="20" height="20" focusable="false" data-prefix="far" data-icon="trash-alt" class="cursor-pointer svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path></svg>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: {
            products: {
                type: Array,
                default: () => [],
            }
        },
        data: () => ({
            items: [{
                value: '',
                price: '',
                quantity: ''
            }],
        }),
        computed: {
            lastItems() {
                return !(this.items.length-1)
            },
            subtotal() {
                return this.items.map((item) => {
                    return Number(item.price * item.quantity)
                });
            },
            total() {
                return this.items.reduce((total, item) => {
                    return total + item.price * item.quantity;
                }, 0);
            },
        },
        methods: {
            addItem(index) {
                this.items.push({
                    value: ''
                });
            },
            removeItems(index) {
                if (index > -1 && !this.lastItems) {
                    this.items.splice(index, 1)
                }
            },
        }
    }
</script>

<style scoped>

</style>
