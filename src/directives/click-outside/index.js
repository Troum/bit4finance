import Vue from 'vue';

export default Vue.directive('click-outside', {
    priority: 700,
    bind() {
        let self = this;
        this.event = () => {
            self.vm.$emit(self.expression, event)
        };
        this.el.addEventListener('click', this.stopProp);
        document.body.addEventListener('click', this.event);
    },
    unbind() {
        this.el.removeEventListener('click', this.stopProp);
        document.body.removeEventListener('click', this.event)
    },
    stopProp(event) {
        event.stopPropagation()
    }
})
