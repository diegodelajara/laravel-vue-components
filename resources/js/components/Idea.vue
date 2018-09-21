<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h2 class="text-center">Captura tus ideas</h2>
                <div class="well">
                    <h4>¿En que estás pensando?</h4>
                    <div class="input-group">
                        <input type="text">
                        <button class="btn btn-primary">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
