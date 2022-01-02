function mainTab(){
    return {
        init: function (activeTab){
            this.activeTab = activeTab;
            const self = this;
            document.addEventListener('changeMainTab', function(e){
                self.activeTab = e.detail.tab;
            });
            this.$watch('activeTab', function (){
                window.dispatchEvent(new Event('resize'));
            });
        },
    }
}

window.addEventListener('popstate', (event) => {
    var tab = event.state.tab;
    document.dispatchEvent(new CustomEvent('changeMainTab', {detail: {tab: tab}}))
});