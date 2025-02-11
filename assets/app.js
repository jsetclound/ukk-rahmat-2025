new Vue({
    el: '#app',
    data: {
        newTodo: '',
        todos: []
    },
    methods: {
        addTodo() {
            if (this.newTodo) {
                this.todos.push({
                    id: Date.now(),
                    text: this.newTodo
                })
                this.newTodo = ''
            }
        }
    }
})