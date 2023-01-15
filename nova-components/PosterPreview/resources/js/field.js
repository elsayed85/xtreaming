import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-poster-preview', IndexField)
  app.component('detail-poster-preview', DetailField)
  app.component('form-poster-preview', FormField)
})
