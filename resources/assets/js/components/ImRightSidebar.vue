<template>
    <div class="im-sidebar">
        <div class="field">
            <label class="label">Invoice Prepared By</label>
            <div class="control">
                <input class="input" v-model="invoicemaker.preparer.name" type="text" placeholder="Blue Gallery Staff"></div>
        </div>
        <div class="field">
            <label class="label">Customer Name</label>
            <div class="control">
                <input class="input" v-model="invoicemaker.customer.name" type="text" placeholder="Customer name"></div>
        </div>

        <div class="field">
            <label class="label">Customer Address</label>
            <div class="control">
                <textarea class="textarea" v-model="invoicemaker.customer.address" placeholder="Address"></textarea>
            </div>
        </div>

        <hr>
        <h3 class="title is-4">Discount(optional)</h3>

        <div class="field has-addons">
            <p class="control">
                <input id="discount" v-model="invoicemaker.discount.amount" class="input" type="text" placeholder="Discount"></p>
            <p class="control">
                <span class="select">
                    <select v-model="invoicemaker.discount.type" @change="clearDiscount()">
                        <option :value="'percentage'">%</option>
                        <option :value="'GHS'">GHS</option>
                    </select>
                </span>
            </p>
        </div>
        <div class="field">
            <p v-if="effective_percent > 0" class="control">
                ~ {{effective_percent}} %
            </p>
        </div>

    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default 
    {
    data: function(){
        return {
            filter_keyword: '',
            invoicemaker:invoicemaker,
        }
      },
    methods: 
    {
        clearDiscount: function()
        {
            invoicemaker.discount.amount = 0.00;
            document.getElementById("discount").focus();
        }
    },
    computed: {
        // duplicate from invoice, used to calculate effective percentage
        added_goods: function(){
            return this.invoicemaker.goods.filter((good) => 
                  good.AddedToInvoice > 0
            );
        },
        // duplicate from invoice, used to calculate effective percentage
        totalIncludingTax: function(){
            return this.added_goods.reduce(function(total, item){
                return total + (item.PriceIn * item.AddedToInvoice);
            },0.00)
        },
        effective_percent: function(){
            if (invoicemaker.discount.type == 'GHS' && invoicemaker.discount.amount > 0) {
                return Math.round(100 * (invoicemaker.discount.amount / this.totalIncludingTax),2); 
            }
        }
    }
}
</script>