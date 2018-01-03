<template>
    <div class="modal is-active">
      <div class="modal-background"></div>
      <div class="modal-content">
        
        <div class="box">

            <form action="/uploadCsv" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="_token" :value="token">
            
                <div class="file is-large">
                  <label class="file-label">
                    <input class="file-input" type="file" name="csv">
                    <span class="file-cta">
                      <span class="file-icon">
                        <i class="fa fa-upload"></i>
                      </span>
                      <span class="file-label">
                        Choose a csv file
                      </span>
                    </span>
                  </label>
                </div>
                
                <input type="submit" value="submit">

            </form>
                  </div>
                  <button class="modal-close is-large" aria-label="close"></button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                token: document.head.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    }
</script>
