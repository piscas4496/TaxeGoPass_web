
import { createApp } from 'vue/dist/vue.esm-bundler';
import './bootstrap';
import Dashboard from './components/Dashboard.vue';
import addAgent from './components/agents/addagent.vue';
import agents from './components/agents/agents.vue';
import testComponent from './components/testComponent.vue';

 const App = createApp({
    
    components:{
        Dashboard,
        testComponent,
        agents,
        addAgent
        
    }
  });
  App.mount("#content");
  
  