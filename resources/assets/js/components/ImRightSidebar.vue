<template>
    <div class="im-sidebar">
        <div class="field">
        <label class="label">Invoice Prepared By</label>
        <div class="control">
        <input class="input" v-model="invoicemaker.preparer.name" type="text" placeholder="Blue Gallery Staff">
        </div>
        </div>
        <div class="field">
        <label class="label">Customer Name</label>
        <div class="control">
        <input class="input" v-model="invoicemaker.customer.name" type="text" placeholder="Customer name">
        </div>
        </div>


        <div class="field">
        <label class="label">Customer Address</label>
        <div class="control">
        <textarea class="textarea" v-model="invoicemaker.customer.address" placeholder="Address"></textarea>
        </div>
        </div>
        
        <label class="label">Discount (optional)</label>
        <div class="field has-addons">
          <p class="control">
            <input v-model="invoicemaker.discount" class="input" type="text" placeholder="0.00">
          </p>
          <p class="control">
            <a class="button is-static">
              %
            </a>
          </p>
        </div>

    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
    data: function(){
        return {
            filter_keyword: '',
            invoicemaker:invoicemaker,
        }
      },
    }
</script>
