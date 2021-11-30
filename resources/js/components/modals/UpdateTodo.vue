<template>
  <div>
    <b-modal
      :visible="isOpen"
      hide-footer
      @close="handleClose"
      title="BootstrapVue"
    >
      <FormTodo
        :todo="todo"
        @submit="handleSubmit"
      />
    </b-modal>
  </div>
</template>

<script>
import FormTodo from '../forms/FormTodo';

export default {
  name: 'UpdateTodo',
  components: {
    FormTodo,
  },
  props: {
    openModal: {
      type: Boolean,
      default: false,
    },
    todo: {
      type: Object,
      default: () => ({}),
    },
  },
  watch: {
    openModal(value){
      console.log(value);
      this.isOpen = value;
    },
  },
  data() {
    return {
      isOpen: false,
    };
  },
  methods: {
    handleClose() {
      this.$emit('closeModal');
    },
    handleSubmit(todo) {
      this.$emit('update', todo);
    },
  }
};
</script>
