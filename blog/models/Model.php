<?php
class Model
{
    public $file;

    public function __construct()
    {
        if (!file_exists('db')) {
            mkdir('db', 0777, true);
        }
        $this->file = 'db/' . $this->file;
    }

    public function bind($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    // TODO: SQLデータベース
    public function insert($data)
    {
        $this->bind($data);
        // TODO: バリデーション

        // id計算
        $topics = $this->get();
        if (empty($topics)) {
            $data['id'] = 1;
        } else {
            $data['id'] = max(array_column($topics, 'id')) + 1;
        }

        // 保存した時刻を記録
        $data['datetime'] = date('Y-m-d H:i:s');

        // TODO: XSS対策
        // データを保存するための配列
        if (file_exists($this->file)) {
            // 既存データを読み込む
            $existingData = json_decode(file_get_contents($this->file), true);
        } else {
            $existingData = [];
        }

        // 新しいデータを追加
        $existingData[] = $data;

        // JSONとして保存
        file_put_contents($this->file, json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        $topics = json_decode(file_get_contents($this->file), true);
    }

    public function get()
    {
        if (file_exists($this->file)) {
            $topics = json_decode(file_get_contents($this->file), true);
            return $topics;
        }
    }

    public function find($id)
    {
        $topics = $this->get();
        foreach ($topics as $topic) {
            if ($topic['id'] == $id) {
                return $topic;
            }
        }
    }
}
