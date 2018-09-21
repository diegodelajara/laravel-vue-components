<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h2 class="text-center">Captura tus ideas Component</h2>
                <div class="well">
                    <h4>¿En que estás pensando?</h4>
                    <div class="input-group">
                        <input type="text">
                        <button class="btn btn-primary">
                            Agregar
                        </button>
                    </div>
                    <div class="well">
                        <ul>
                            <li v-for="idea in ideas">{{idea.description}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from 'axios'

    export default {
        data (){
            return {
                ideas: []
            }
        },
        mounted() {
            this.getIdeas()
        },
        methods: {
            getIdeas: function(){
                let url = 'mis-ideas'
                axios.get(url).then(response => {
                    this.ideas = response.data
                });
            }
        }
    }
</script>
