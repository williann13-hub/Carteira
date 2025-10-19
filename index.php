<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Carteira</title>
    
    <!-- PWA Meta Tags -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Carteira">
    <meta name="theme-color" content="#000000">
    
    <!-- PWA Icons -->
    <link rel="apple-touch-icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Crect width='512' height='512' fill='%23000'/%3E%3Cpath d='M64 112c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h384c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16H64zM48 128c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H80c-17.7 0-32-14.3-32-32v-64zm16 144c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h384c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16H64zm-16 16c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H80c-17.7 0-32-14.3-32-32v-64zm16 144c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h384c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16H64zm-16 16c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H80c-17.7 0-32-14.3-32-32v-64z' fill='%23fff'/%3E%3C/svg%3E">
    <link rel="manifest" href="data:application/json;base64,eyJuYW1lIjoiQ2FydGVpcmEiLCJzaG9ydF9uYW1lIjoiQ2FydGVpcmEiLCJzdGFydF91cmwiOiIuLyIsImRpc3BsYXkiOiJzdGFuZGFsb25lIiwiYmFja2dyb3VuZF9jb2xvciI6IiMwMDAwMDAiLCJ0aGVtZV9jb2xvciI6IiMwMDAwMDAiLCJpY29ucyI6W3sic3JjIjoiZGF0YTppbWFnZS9zdmcreG1sLCUzQ3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCA1MTIgNTEyJyUzRSUzQ3JlY3Qgd2lkdGg9JzUxMicgaGVpZ2h0PSc1MTInIGZpbGw9JyUyMzAwMCcvJTNFJTNDcGF0aCBkPSdNNjQgMTEyYy04LjggMC0xNiA3LjItMTYgMTZ2NjRjMCA4LjggNy4yIDE2IDE2IDE2aDM4NGM4LjggMCAxNi03LjIgMTYtMTZ2LTY0YzAtOC44LTcuMi0xNi0xNi0xNkg2NHpNNDggMTI4YzAtMTcuNyAxNC4zLTMyIDMyLTMyaDM4NGMxNy43IDAgMzIgMTQuMyAzMiAzMnY2NGMwIDE3LjctMTQuMyAzMi0zMiAzMkg4MGMtMTcuNyAwLTMyLTE0LjMtMzItMzJ2LTY0em0xNiAxNDRjLTguOCAwLTE2IDcuMi0xNiAxNnY2NGMwIDguOCA3LjIgMTYgMTYgMTZoMzg0YzguOCAwIDE2LTcuMiAxNi0xNnYtNjRjMC04LjgtNy4yLTE2LTE2LTE2SDY0em0tMTYgMTZjMC0xNy43IDE0LjMtMzIgMzItMzJoMzg0YzE3LjcgMCAzMiAxNC4zIDMyIDMydjY0YzAgMTcuNy0xNC4zIDMyLTMyIDMySDgwYy0xNy43IDAtMzItMTQuMy0zMi0zMnYtNjR6bTE2IDE0NGMtOC44IDAtMTYgNy4yLTE2IDE2djY0YzAgOC44IDcuMiAxNiAxNiAxNmgzODRjOC44IDAgMTYtNy4yIDE2LTE2di02NGMwLTguOC03LjItMTYtMTYtMTZINjR6bS0xNiAxNmMwLTE3LjcgMTQuMy0zMiAzMi0zMmgzODRjMTcuNyAwIDMyIDE0LjMgMzIgMzJ2NjRjMCAxNy43LTE0LjMgMzItMzIgMzJIODBjLTE3LjcgMC0zMi0xNC4zLTMyLTMydi02NHonIGZpbGw9JyUyM2ZmZicvJTNFJTNDL3N2ZyUzRSIsInNpemVzIjoiNTEyeDUxMiIsInR5cGUiOiJpbWFnZS9zdmcreG1sIn1dfQ==">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background: #000;
            color: #fff;
            overflow-x: hidden;
            -webkit-user-select: none;
            user-select: none;
            touch-action: manipulation;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 88px;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            z-index: 1000;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            padding: 0 20px 12px;
            border-bottom: 0.5px solid rgba(255, 255, 255, 0.1);
        }

        .header-logo {
            height: 40px;
            width: auto;
        }

        .menu-button {
            background: none;
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .menu-button:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .menu-dots {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .menu-dot {
            width: 4px;
            height: 4px;
            background: #fff;
            border-radius: 50%;
        }

        .pin-section {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
        }

        .pin-text {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .pin-button {
            background: #666;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .pin-button:hover {
            background: #777;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .wallet-container {
            margin-top: 88px;
            padding: 20px;
            min-height: calc(100vh - 88px);
            position: relative;
            padding-bottom: 120px;
        }

        .cards-stack {
            position: relative;
            max-width: 300px;
            margin: 0 auto;
            perspective: 1000px;
        }

        .card {
            width: 100%;
            height: 180px;
            border-radius: 8px;
            position: relative;
            margin-bottom: 20px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform-style: preserve-3d;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .card:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        }

        .card.dragging {
            transition: none;
        }

        .card.flipped {
            transform: rotateY(180deg);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            backface-visibility: hidden;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-back {
            transform: rotateY(180deg);
            background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
        }

        .credit-card {
            background: linear-gradient(135deg, #ff8c00 0%, #ff6b35 100%);
            color: white;
        }

        .debit-card {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .store-card {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }

        .card-brand {
            font-size: 12px;
            font-weight: 600;
            opacity: 0.9;
        }

        .card-number {
            font-size: 16px;
            font-weight: 300;
            letter-spacing: 2px;
            margin: 15px 0;
            font-family: 'Courier New', monospace;
        }

        .card-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .card-holder {
            font-size: 12px;
            font-weight: 500;
            opacity: 0.9;
        }

        .card-expiry {
            font-size: 12px;
            font-weight: 500;
            opacity: 0.9;
        }

        .card-logo {
            position: absolute;
            top: 15px;
            right: 20px;
            width: 50px;
            height: 30px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 10px;
        }

        .magnetic-strip {
            width: 100%;
            height: 30px;
            background: #333;
            margin: 15px 0;
            border-radius: 4px;
        }

        .cvv-box {
            background: rgba(255, 255, 255, 0.9);
            color: #000;
            padding: 6px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            width: 40px;
            margin-left: auto;
        }

        .add-card-btn {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #007AFF;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 122, 255, 0.4);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .add-card-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(0, 122, 255, 0.6);
        }

        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-top: 0.5px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 1000;
        }

        .quick-access-text {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
        }

        .all-button {
            background: #333;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .all-button:hover {
            background: #444;
        }

        .pin-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .pin-content {
            background: #1a1a1a;
            border-radius: 20px;
            padding: 30px;
            width: 300px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
        }

        .pin-title {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .pin-display {
            background: #333;
            border: none;
            border-radius: 12px;
            padding: 15px;
            color: #fff;
            font-size: 24px;
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
            letter-spacing: 8px;
        }

        .pin-keypad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .pin-key {
            width: 60px;
            height: 60px;
            border: none;
            border-radius: 50%;
            background: #333;
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 auto;
        }

        .pin-key:hover {
            background: #444;
            transform: scale(1.05);
        }

        .pin-key:active {
            transform: scale(0.95);
        }

        .pin-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .modal-content {
            background: #1a1a1a;
            border-radius: 20px;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
        }

        .modal h2 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #ccc;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #333;
            border-radius: 12px;
            background: #2a2a2a;
            color: #fff;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #007AFF;
            box-shadow: 0 0 0 3px rgba(0, 122, 255, 0.2);
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .btn {
            padding: 14px 24px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        .btn-primary {
            background: #007AFF;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #333;
            color: white;
        }

        .btn-secondary:hover {
            background: #444;
        }

        .toast {
            position: fixed;
            top: 100px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 3000;
        }

        .toast.show {
            opacity: 1;
            transform: translateX(-50%) translateY(10px);
        }

        @media (max-width: 480px) {
            .wallet-container {
                padding: 15px;
            }
            
            .cards-stack {
                max-width: 280px;
            }
            
            .card {
                height: 160px;
            }
            
            .card-number {
                font-size: 14px;
            }
            
            .modal-content {
                width: 95%;
                padding: 20px;
            }

            .pin-content {
                width: 280px;
                padding: 20px;
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://i.imgur.com/GXx5W1w.png" alt="Logo" class="header-logo">
        <button class="menu-button">
            <div class="menu-dots">
                <div class="menu-dot"></div>
                <div class="menu-dot"></div>
                <div class="menu-dot"></div>
            </div>
        </button>
    </div>

    <div class="wallet-container">
        <div class="cards-stack" id="cardsStack">
            <!-- Cards serão inseridos aqui dinamicamente -->
        </div>
        
        <div class="pin-section">
            <div class="pin-text">Pagar com o PIN</div>
            <button class="pin-button" onclick="openPinModal()">PIN</button>
        </div>
    </div>

    <div class="bottom-bar">
        <div class="quick-access-text">Acesso rápido</div>
        <button class="all-button">Todos</button>
    </div>

    <button class="add-card-btn" onclick="openAddCardModal()">+</button>

    <!-- Modal PIN -->
    <div class="pin-modal" id="pinModal">
        <div class="pin-content">
            <h2 class="pin-title">Digite seu PIN</h2>
            <input type="password" class="pin-display" id="pinDisplay" maxlength="4" readonly>
            <div class="pin-keypad">
                <button class="pin-key" onclick="addDigit('1')">1</button>
                <button class="pin-key" onclick="addDigit('2')">2</button>
                <button class="pin-key" onclick="addDigit('3')">3</button>
                <button class="pin-key" onclick="addDigit('4')">4</button>
                <button class="pin-key" onclick="addDigit('5')">5</button>
                <button class="pin-key" onclick="addDigit('6')">6</button>
                <button class="pin-key" onclick="addDigit('7')">7</button>
                <button class="pin-key" onclick="addDigit('8')">8</button>
                <button class="pin-key" onclick="addDigit('9')">9</button>
                <button class="pin-key" onclick="clearPin()">⌫</button>
                <button class="pin-key" onclick="addDigit('0')">0</button>
                <button class="pin-key" onclick="confirmPin()">✓</button>
            </div>
            <div class="pin-actions">
                <button class="btn btn-secondary" onclick="closePinModal()">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- Modal para adicionar cartão -->
    <div class="modal" id="addCardModal">
        <div class="modal-content">
            <h2>Adicionar Cartão</h2>
            <form id="cardForm">
                <div class="form-group">
                    <label>Tipo de Cartão</label>
                    <select id="cardType" required>
                        <option value="">Selecione o tipo</option>
                        <option value="credit">Cartão de Crédito</option>
                        <option value="debit">Cartão de Débito</option>
                        <option value="store">Cartão de Loja</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Nome do Titular</label>
                    <input type="text" id="cardHolder" placeholder="Nome completo" required>
                </div>
                
                <div class="form-group">
                    <label>Número do Cartão</label>
                    <input type="text" id="cardNumber" placeholder="0000 0000 0000 0000" maxlength="19" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Validade</label>
                        <input type="text" id="cardExpiry" placeholder="MM/AA" maxlength="5" required>
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="text" id="cardCvv" placeholder="000" maxlength="3" required>
                    </div>
                </div>
                
                <div style="margin-top: 30px;">
                    <button type="submit" class="btn btn-primary">Adicionar Cartão</button>
                    <button type="button" class="btn btn-secondary" onclick="closeAddCardModal()">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="toast" id="toast"></div>

    <script>
        // Dados dos cartões (simulando dados do servidor)
        let cards = [
            {
                id: 1,
                type: 'credit',
                holder: 'WILLIAN R PERON',
                number: '4532 1234 5678 9012',
                expiry: '12/26',
                cvv: '123',
                brand: 'VISA'
            }
        ];

        let cardIdCounter = 2;
        let currentPin = '';

        // Funções PIN
        function openPinModal() {
            document.getElementById('pinModal').style.display = 'flex';
            currentPin = '';
            document.getElementById('pinDisplay').value = '';
        }

        function closePinModal() {
            document.getElementById('pinModal').style.display = 'none';
            currentPin = '';
            document.getElementById('pinDisplay').value = '';
        }

        function addDigit(digit) {
            if (currentPin.length < 4) {
                currentPin += digit;
                document.getElementById('pinDisplay').value = '•'.repeat(currentPin.length);
            }
        }

        function clearPin() {
            if (currentPin.length > 0) {
                currentPin = currentPin.slice(0, -1);
                document.getElementById('pinDisplay').value = '•'.repeat(currentPin.length);
            }
        }

        function confirmPin() {
            if (currentPin.length === 4) {
                showToast('PIN confirmado!');
                closePinModal();
            } else {
                showToast('PIN deve ter 4 dígitos');
            }
        }

        // Renderizar cartões
        function renderCards() {
            const cardsStack = document.getElementById('cardsStack');
            cardsStack.innerHTML = '';

            cards.forEach((card, index) => {
                const cardElement = createCardElement(card, index);
                cardsStack.appendChild(cardElement);
            });
        }

        // Formatar número do cartão para mostrar apenas últimos 4 dígitos
        function formatCardNumberDisplay(number) {
            const cleanNumber = number.replace(/\s/g, '');
            const lastFour = cleanNumber.slice(-4);
            return '•••• •••• •••• ' + lastFour;
        }

        // Criar elemento do cartão
        function createCardElement(card, index) {
            const cardDiv = document.createElement('div');
            cardDiv.className = `card ${card.type}-card slide-in`;
            cardDiv.style.animationDelay = `${index * 0.1}s`;
            
            cardDiv.innerHTML = `
                <div class="card-front">
                    <div class="card-brand">${getBrandLogo(card.type)}</div>
                    <div class="card-number">${formatCardNumberDisplay(card.number)}</div>
                    <div class="card-info">
                        <div class="card-holder">${card.holder}</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" style="height: 15px; width: auto;">
                    </div>
                </div>
                <div class="card-back">
                    <div class="magnetic-strip"></div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="color: #ccc; font-size: 10px;">CVV</div>
                        <div class="cvv-box">${card.cvv}</div>
                    </div>
                    <div style="margin-top: 15px; font-size: 10px; color: #888;">
                        ${card.holder}<br>
                        Este cartão pertence ao portador acima
                    </div>
                </div>
            `;

            // Variáveis para controlar o arraste
            let isDragging = false;
            let startY = 0;
            let currentY = 0;
            let touchTimer;

            // Eventos de mouse (desktop)
            cardDiv.addEventListener('mousedown', function(e) {
                e.preventDefault();
                isDragging = true;
                startY = e.clientY;
                this.classList.add('dragging');
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });

            // Eventos de touch (mobile)
            cardDiv.addEventListener('touchstart', function(e) {
                startY = e.touches[0].clientY;
                
                // Timer para toque longo (remover cartão)
                touchTimer = setTimeout(() => {
                    if (!isDragging && confirm('Deseja remover este cartão?')) {
                        removeCard(card.id);
                    }
                }, 800);
            });

            cardDiv.addEventListener('touchmove', function(e) {
                clearTimeout(touchTimer); // Cancela o toque longo se começar a arrastar
                
                if (!isDragging) {
                    isDragging = true;
                    this.classList.add('dragging');
                }
                
                currentY = e.touches[0].clientY;
                const deltaY = currentY - startY;
                
                // Só permite arrastar para baixo
                if (deltaY > 0) {
                    this.style.transform = `translateY(${deltaY}px)`;
                }
                
                e.preventDefault();
            });

            cardDiv.addEventListener('touchend', function(e) {
                clearTimeout(touchTimer);
                
                if (isDragging) {
                    isDragging = false;
                    this.classList.remove('dragging');
                    
                    // Volta ao lugar original com animação suave
                    this.style.transform = 'translateY(0px)';
                }
            });

            function onMouseMove(e) {
                if (!isDragging) return;
                currentY = e.clientY;
                const deltaY = currentY - startY;
                
                // Só permite arrastar para baixo
                if (deltaY > 0) {
                    cardDiv.style.transform = `translateY(${deltaY}px)`;
                }
            }

            function onMouseUp(e) {
                if (!isDragging) return;
                isDragging = false;
                cardDiv.classList.remove('dragging');
                
                // Volta ao lugar original
                cardDiv.style.transform = 'translateY(0px)';
                
                document.removeEventListener('mousemove', onMouseMove);
                document.removeEventListener('mouseup', onMouseUp);
            }

            return cardDiv;
        }

        // Obter logo da marca do cartão
        function getBrandLogo(type) {
            switch(type) {
                case 'credit': return '<img src="https://i.imgur.com/MVo3Jo0.png" alt="Itaú" style="height: 35px; width: auto; opacity: 0.9;">';
                case 'debit': return '<img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 120 30\'%3E%3Crect width=\'120\' height=\'30\' fill=\'none\'/%3E%3Ctext x=\'10\' y=\'20\' font-family=\'Arial,sans-serif\' font-size=\'12\' font-weight=\'bold\' fill=\'%23fff\'%3EDébito%3C/text%3E%3C/svg%3E" alt="Débito" style="height: 15px; width: auto; opacity: 0.9;">';
                case 'store': return '<img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 120 30\'%3E%3Crect width=\'120\' height=\'30\' fill=\'none\'/%3E%3Ctext x=\'10\' y=\'20\' font-family=\'Arial,sans-serif\' font-size=\'12\' font-weight=\'bold\' fill=\'%23fff\'%3ELoja%3C/text%3E%3C/svg%3E" alt="Loja" style="height: 15px; width: auto; opacity: 0.9;">';
                default: return '<img src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 120 30\'%3E%3Crect width=\'120\' height=\'30\' fill=\'none\'/%3E%3Ctext x=\'10\' y=\'20\' font-family=\'Arial,sans-serif\' font-size=\'12\' font-weight=\'bold\' fill=\'%23fff\'%3ECartão%3C/text%3E%3C/svg%3E" alt="Cartão" style="height: 15px; width: auto; opacity: 0.9;">';
            }
        }

        // Identificar bandeira do cartão pelo número
        function getCardBrand(number) {
            const cleanNumber = number.replace(/\s/g, '');
            if (cleanNumber.startsWith('4')) return 'VISA';
            if (cleanNumber.startsWith('5')) return 'MASTER';
            if (cleanNumber.startsWith('3')) return 'AMEX';
            return 'CARD';
        }

        // Formatar número do cartão
        function formatCardNumber(value) {
            const cleanValue = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
            const matches = cleanValue.match(/\d{4,16}/g);
            const match = matches && matches[0] || '';
            const parts = [];

            for (let i = 0, len = match.length; i < len; i += 4) {
                parts.push(match.substring(i, i + 4));
            }

            if (parts.length) {
                return parts.join(' ');
            } else {
                return cleanValue;
            }
        }

        // Formatar data de validade
        function formatExpiry(value) {
            const cleanValue = value.replace(/\D/g, '');
            if (cleanValue.length >= 2) {
                return cleanValue.substring(0, 2) + '/' + cleanValue.substring(2, 4);
            }
            return cleanValue;
        }

        // Adicionar event listeners para formatação
        document.getElementById('cardNumber').addEventListener('input', function(e) {
            e.target.value = formatCardNumber(e.target.value);
        });

        document.getElementById('cardExpiry').addEventListener('input', function(e) {
            e.target.value = formatExpiry(e.target.value);
        });

        document.getElementById('cardCvv').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        // Abrir modal de adicionar cartão
        function openAddCardModal() {
            document.getElementById('addCardModal').style.display = 'flex';
            document.getElementById('cardForm').reset();
        }

        // Fechar modal de adicionar cartão
        function closeAddCardModal() {
            document.getElementById('addCardModal').style.display = 'none';
        }

        // Mostrar toast
        function showToast(message) {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Adicionar novo cartão
        document.getElementById('cardForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newCard = {
                id: cardIdCounter++,
                type: document.getElementById('cardType').value,
                holder: document.getElementById('cardHolder').value.toUpperCase(),
                number: document.getElementById('cardNumber').value,
                expiry: document.getElementById('cardExpiry').value,
                cvv: document.getElementById('cardCvv').value,
                brand: getCardBrand(document.getElementById('cardNumber').value)
            };

            cards.push(newCard);
            renderCards();
            closeAddCardModal();
            showToast('Cartão adicionado com sucesso!');
        });

        // Remover cartão
        function removeCard(cardId) {
            cards = cards.filter(card => card.id !== cardId);
            renderCards();
            showToast('Cartão removido com sucesso!');
        }

        // Fechar modal ao clicar fora
        document.getElementById('addCardModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAddCardModal();
            }
        });

        document.getElementById('pinModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePinModal();
            }
        });

        // Registrar Service Worker para PWA
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                const swCode = `
                    self.addEventListener('install', function(event) {
                        self.skipWaiting();
                    });
                    
                    self.addEventListener('activate', function(event) {
                        event.waitUntil(self.clients.claim());
                    });
                    
                    self.addEventListener('fetch', function(event) {
                        event.respondWith(
                            caches.match(event.request).then(function(response) {
                                return response || fetch(event.request);
                            })
                        );
                    });
                `;
                
                const blob = new Blob([swCode], { type: 'application/javascript' });
                const swUrl = URL.createObjectURL(blob);
                
                navigator.serviceWorker.register(swUrl)
                    .then(function(registration) {
                        console.log('ServiceWorker registrado com sucesso:', registration);
                    })
                    .catch(function(error) {
                        console.log('Falha ao registrar ServiceWorker:', error);
                    });
            });
        }

        // Inicializar aplicação
        document.addEventListener('DOMContentLoaded', function() {
            renderCards();
        });

        // Prevenir zoom no iOS
        document.addEventListener('gesturestart', function (e) {
            e.preventDefault();
        });

        // Adicionar efeito de vibração no iOS (se disponível)
        function vibrateDevice() {
            if (navigator.vibrate) {
                navigator.vibrate(50);
            }
        }

        // Adicionar vibração aos cliques dos cartões
        document.addEventListener('click', function(e) {
            if (e.target.closest('.card')) {
                vibrateDevice();
            }
        });
    </script>
</body>
</html>
