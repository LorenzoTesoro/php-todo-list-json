const { createApp } = Vue;

createApp({
  data() {
    return {
      api_url: "read-tasks.php",
      tasks: [],
      newTask: "",
    };
  },
  methods: {
    readTasks(url) {
      axios
        .get(url)
        .then((response) => {
          console.log(response.data);
          this.tasks = response.data;
        })
        .catch((err) => {
          console.log(err.message);
        });
    },
    saveTask() {
      const data = {
        title: this.newTask,
      };

      axios
        .post("store-tasks.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          console.log(response);
          this.tasks = response.data;
          this.newTask = ""; // empty input
        })
        .catch((err) => {
          console.log(err.message);
        });
      this.readTasks(this.api_url);
    },
    updateTask(index) {
      console.log("updating...");

      const data = {
        task_index: index,
        done: true,
      };

      axios
        .post("update-tasks.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response);
          this.tasks = response.data;
        })
        .catch((err) => {
          console.error(err.message);
        });
    },
    deleteTask(index) {
      console.log("deleting...", index);
      const data = {
        task_index: index,
      };

      axios
        .post("delete-tasks.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response);
          this.tasks = response.data;
        })
        .catch((err) => {
          console.error(err.message);
        });
    },
  },
  mounted() {
    this.readTasks(this.api_url);
  },
}).mount("#app");
