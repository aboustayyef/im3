<template>
    <div class="im-sidebar">
        <button @click="toggleModal()" class="button is-primary">Upload New Data</button>
        <hr> 

        <!-- Search Field -->
		<div class="field">
		  <label class="label">Pick Items to add</label>
		  <div class="control">
		    <input class="input" v-model="filter_keyword" type="text" placeholder="search...">
		  </div>
		</div>
		
		<!-- Loading Indicator -->
		<div v-if="this.invoicemaker.loaded != 1">
		  <button class="button is-primary is-loading">Loading...</button> 
		</div>

		<!-- Filtered Product Table -->
		<table class="table is-fullwidth is-narrow is-striped">
        	<tbody>
            	<tr v-if="invoicemaker.loaded" v-for="item in filtered_goods">
              		<td>{{item.Name}} - {{item.Description}}</td>
              		<td>{{item.Stock}}</td>
              		<td><button @click="increment(item)" class="button is-primary is-small">Add</button></td>
            	</tr>
          	</tbody>
        </table>
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
        methods: {
          toggleModal: function(){
            this.$emit('toggleModal');
          },
          increment: function(item){
            if (item.AddedToInvoice < item.Stock) {
              item.AddedToInvoice++
            }
          }
        },
        computed: {
          filtered_goods: function(){
            if (this.filter_keyword == '') {
              return this.invoicemaker.goods;
            }
            let reg = new RegExp(this.filter_keyword, "gi");
            return this.invoicemaker.goods.filter((good) => 
                  (good.Name.match(reg) != null) ||
                  (good.Description.match(reg) != null) ||
                  (good.Code.match(reg) != null) ||
                  (good.Supplier.match(reg) != null)
            );
          }
        }
    }
</script>
