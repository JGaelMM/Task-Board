const API = {

    async getTasks() {
        const response = await axios.get('/api/tasks');
        return response.data;
    },

    async createTask(data) {
        return await axios.post('/api/tasks', data);
    },

    async updateTask(id, data) {
        return await axios.put(`/api/tasks/${id}`, data);
    },

    async deleteTask(id) {
        return await axios.delete(`/api/tasks/${id}`);
    }
};
