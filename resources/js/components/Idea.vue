<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h2 class="text-center">Captura tus ideas Component</h2>
                <div class="well">
                    <h4>¿En que estás pensando?</h4>
                    <div class="input-group">
                        <input type="text" v-model="newIdea">
                        <button class="btn btn-primary" @click="seveIdea">
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
                ideas: [],
                newIdea: null
            }
        },
        created : function() {
            this.getIdeas()
        },
        methods: {
            getIdeas: function(){
                let url = 'mis-ideas'
                axios.get(url).then(response => {
                    this.ideas = response.data
                });
            },
            seveIdea: function(){
                let url = 'guardar-idea'
                axios.post(url, {
                    description: this.newIdea
                }).then(response => {
                    this.getIdeas()
                    this.newIdea = ''
                })
            }
        }
    }
</script>
