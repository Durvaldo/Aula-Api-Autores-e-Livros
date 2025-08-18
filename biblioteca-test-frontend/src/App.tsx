import ApiTester from './components/ApiTester';
import './App.css'

function App() {
  return (
    <div style={{
      minHeight: '100vh',
      padding: '20px',
      maxWidth: '1200px',
      margin: '0 auto',
      width: '100%'
    }}>
      <h1 style={{ textAlign: 'center', marginBottom: '2em' }}>
        Sistema de Testes API Biblioteca
      </h1>
      <ApiTester />
    </div>
  );
}

export default App
