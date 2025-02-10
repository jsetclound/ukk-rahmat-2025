const app = Vue.createApp({
    data() {
        return {
            inputText: "hello",
            Task: [],
        };
    },
    methods: {
        addTask() {
            this.Tasks.push(this.inputText);
            this.inputText = "";
        },
    },
});
app.mount("#toDoList");