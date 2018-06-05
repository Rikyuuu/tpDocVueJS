<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document VueJS</title>
    </head>
    <body>
        <div id="app">
            {{ message }}
        </div>
        <div id="app-2">
            <span v-bind:title="message">
                Passez votre souris sur moi pendant quelques secondes
                pour voir mon titre lié dynamiquement !
            </span>
        </div>
        <div id="app-3">
            <p v-if="seen">Vous me voyez !</p>
        </div>
        <div id="app-4">
            <ol>
                <li v-for="todo in todos">
                    {{ todo.text }}
                </li>
            </ol>
        </div>
        <div id="app-5">
            <p>{{ message }}</p>
            <button v-on:click="reverseMessage">Message retourné</button>
        </div>
        <div id="app-6">
            <p>{{ message }}</p>
            <input type="text" v-model="message">
        </div>
        <div id="app-7">
            <ol>
                <!-- <todo-item></todo-item> // Crée une instance du composant todo-list -->
                <!--
                Maintenant nous fournissons à chaque todo-item l'objet todo
                qu'il représente de manière à ce que son contenu puisse être dynamique.
                Nous avons également besoin de fournir à chaque composant une « clé »,
                mais nous expliquerons cela plus tard.
                -->
                <todo-item
                v-for="item in groceryList"
                v-bind:todo="item"
                v-bind:key="item.id">
                </todo-item>
            </ol>
        </div>

        <!-- development version, includes helpful console warnings -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>