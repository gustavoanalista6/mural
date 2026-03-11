<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Chat</title>
    <style>
        body { font-family: system-ui, Arial; margin: 0; background: #0b0b0f; color: #eaeaf0; }
        .wrap { max-width: 900px; margin: 0 auto; padding: 20px; }
        .box { background: #141420; border: 1px solid #2a2a3a; border-radius: 14px; padding: 14px; }
        .msgs { display: flex; flex-direction: column; gap: 10px; height: 65vh; overflow: auto; padding: 10px; }
        .msg { max-width: 80%; padding: 10px 12px; border-radius: 14px; white-space: pre-wrap; }
        .user { align-self: flex-end; background: #2b2bff22; border: 1px solid #4a4aff55; }
        .assistant { align-self: flex-start; background: #ffffff10; border: 1px solid #ffffff22; }
        form { display: flex; gap: 10px; margin-top: 12px; }
        textarea { flex: 1; resize: none; height: 60px; border-radius: 12px; border: 1px solid #2a2a3a; background:#0f0f18; color:#eaeaf0; padding: 10px; }
        button { border-radius: 12px; border: 1px solid #2a2a3a; background:#1f1f2d; color:#eaeaf0; padding: 0 16px; cursor: pointer; }
        button:disabled { opacity: .6; cursor: not-allowed; }
    </style>
</head>
<body>
<div class="wrap">
    <h2 style="margin:0 0 10px">Chat</h2>

    <div class="box">
        <div id="msgs" class="msgs"></div>

        <form id="chatForm">
            <textarea id="message" placeholder="Digite sua mensagem..."></textarea>
            <button id="sendBtn" type="submit">Enviar</button>
        </form>
    </div>
</div>

<script>
    const msgs = document.getElementById('msgs');
    const form = document.getElementById('chatForm');
    const messageEl = document.getElementById('message');
    const sendBtn = document.getElementById('sendBtn');

    function scrollDown() { msgs.scrollTop = msgs.scrollHeight; }

    function addMsg(text, who) {
        const div = document.createElement('div');
        div.className = `msg ${who}`;
        div.textContent = text;
        msgs.appendChild(div);
        scrollDown();
        return div;
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const text = messageEl.value.trim();
        if (!text) return;

        messageEl.value = '';
        sendBtn.disabled = true;

        addMsg(text, 'user');
        const typing = addMsg('Digitando...', 'assistant');

        try {
            const res = await fetch("{{ route('chat.send') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ message: text })
            });

            const data = await res.json();
            typing.remove();

            if (!res.ok) {
                addMsg(data?.message ?? 'Erro ao enviar.', 'assistant');
            } else {
                addMsg(data.assistant, 'assistant');
            }
        } catch (err) {
            typing.remove();
            addMsg('Falha de rede/chamada.', 'assistant');
        } finally {
            sendBtn.disabled = false;
            messageEl.focus();
        }
    });
</script>
</body>
</html>