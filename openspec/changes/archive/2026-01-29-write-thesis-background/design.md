## Context

This design addresses the thesis background chapter (Latar Belakang) for an undergraduate thesis on LEAF — a **low-code, declarative agentic framework**. While LEAF is designed to be applicable to any domain requiring multi-agent coordination, this thesis specifically focuses on **Kubernetes observability and SRE operations** as the implementation case study.

The current `contents/b1-bab1.tex` contains placeholder content that needs to be replaced with a comprehensive, academically rigorous background establishing the research motivation, literature foundation, and gap analysis.

**Current state**: Generic placeholder text in Indonesian academic format
**Target state**: Research-grounded background identifying the **accessibility gap** in current agentic frameworks (require programming despite having standards), and positioning LEAF as the first **low-code agentic framework with standards-based extensibility**
**Constraints**: Indonesian language, UNY thesis format standards, LaTeX with BibTeX citations

## Goals / Non-Goals

**Goals:**

- Establish clear research motivation through observability evolution narrative (as thesis case study context)
- Survey current agentic frameworks (Google ADK, LangChain, CrewAI) and their adoption of MCP/A2A standards
- Identify and articulate the **accessibility gap**: existing frameworks require programming expertise despite having standardized protocols
- Introduce LEAF framework as the first **low-code agentic framework** with declarative YAML/JSON manifests and standards-based extensibility
- Present the **progressive complexity model**: pure declarative → declarative + references → custom implementation
- Clarify thesis scope: LEAF validated through SRE/observability implementation, generalizable to other domains
- Maintain academic rigor with proper citations (minimum 15-20 recent references)
- Follow Indonesian academic writing conventions and UNY format

**Non-Goals:**

- Detailed technical implementation (belongs in BAB III Methodology)
- Complete framework specification (belongs in BAB II Literature Review)
- Performance benchmarks or experimental results (belongs in BAB IV)
- Comparison with competing solutions (belongs in BAB II)

## Decisions

### Decision 1: Narrative Structure — Problem-Evolution-Landscape-Gap-Solution

**Choice**: Structure the background as a logical flow:

1. Cloud-native complexity problem → 2. Observability evolution → 3. AIOps emergence → 4. MCP/A2A standards emergence → 5. Current agentic frameworks landscape → 6. **Accessibility gap** (still require coding) → 7. LEAF proposition (low-code + extensible)

**Rationale**: This narrative acknowledges that standards exist and are adopted, but identifies the remaining gap (accessibility). Academic readers see progression from solved problems to unsolved ones.

**Alternatives considered**:

- Solution-first approach: Rejected — lacks academic rigor, doesn't establish motivation
- Chronological history: Rejected — too lengthy, doesn't focus on research contribution

### Decision 2: Literature Scope — Focus on 2020-2025 Sources

**Choice**: Prioritize recent literature (2020-2025) with foundational works only where necessary (SRE book 2016, observability foundations).

**Rationale**: The AI agent protocol space (MCP, A2A) is rapidly evolving. Older literature on AIOps is already outdated. Recent sources ensure relevance and demonstrate awareness of current state.

**Alternatives considered**:

- Comprehensive historical survey: Rejected — scope creep, belongs in literature review chapter
- Only 2024-2025 sources: Rejected — misses foundational SRE/observability concepts

### Decision 3: Research Gap Framing — Accessibility Barrier Despite Standardization

**Choice**: Frame the gap as "existing frameworks require programming expertise despite adopting standardized protocols" — an **accessibility barrier** that excludes domain experts.

**Rationale**: The standardization story is no longer novel — Google ADK, LangChain, CrewAI already support MCP/A2A. The true gap is:

- Domain experts (SREs, operators, analysts) cannot build agentic apps without becoming developers
- Current frameworks force a false choice: simple no-code tools vs full programming
- No framework offers **declarative simplicity with standards-based extensibility**

**LEAF's position**: First low-code agentic framework that solves this accessibility gap while preserving power through MCP/A2A escape hatches.

**Alternatives considered**:

- "No standards exist": Rejected — factually incorrect, MCP/A2A adopted by major frameworks
- "Standards need improvement": Rejected — not our contribution, standards are sufficient
- "Kubernetes-specific gap": Rejected — too narrow, misses general accessibility contribution

### Decision 4: LEAF Introduction Depth — Declarative Design + Progressive Complexity

**Choice**: Introduce LEAF emphasizing its **low-code, declarative nature** as the primary differentiator:

- **Kubernetes-style manifests**: YAML/JSON declarative configuration for agentic apps
- **Progressive complexity model**: Level 1 (pure YAML) → Level 2 (YAML + references) → Level 3 (custom code with SDK)
- **Standards as escape hatch**: MCP/A2A enable extensibility without lock-in
- Opinionated Grid, 4-layer taxonomy, Blackboard pattern — as supporting architecture
- **Thesis scope**: SRE/observability as validation case study

**Rationale**: The "L" in LEAF (Low-code) should be the headline contribution. Architecture patterns support this, not the other way around.

### Decision 5: Citation Style — Numbered with Author-Year in Text

**Choice**: Use `\cite{}` with natbib producing numbered citations, but mention key author names in running text for important works.

**Rationale**: UNY format uses numbered citations. Mentioning authors (e.g., "Beyer et al. introduced SRE principles...") adds academic credibility and readability.

## Risks / Trade-offs

| Risk                                                                | Mitigation                                                                                                                                    |
| ------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| MCP/A2A protocols too new — limited academic literature             | Cite official specifications, Google/Anthropic whitepapers, and early adoption case studies                                                   |
| Background too long — exceeds typical thesis proportions            | Target 2500-3000 words; detailed literature belongs in BAB II                                                                                 |
| Indonesian academic style inconsistent with technical English terms | Use established Indonesian translations where available; keep English for terms without standard translation (e.g., "observability," "agent") |
| Over-claiming novelty — low-code agentic tools may exist            | Survey existing no-code/low-code AI tools; emphasize combination of declarative + standards-based extensibility as specific contribution      |
| Underselling existing frameworks                                    | Acknowledge Google ADK, LangChain, CrewAI strengths; focus on accessibility gap, not capability gap                                           |
| "Low-code" perceived as toy/limited                                 | Emphasize progressive complexity model and standards-based escape hatches for advanced users                                                  |
| BibTeX entries incomplete or inconsistent                           | Create comprehensive `.bib` file with DOIs where available; verify all citations compile                                                      |

## Open Questions

1. **Exact word count target**: Should background aim for ~2500 words or can it extend to ~3500 given the technical complexity?
2. **Indonesian vs English technical terms**: For terms like "observability," "agentic," "blackboard pattern" — use English with Indonesian explanation, or attempt translation?
3. **Citation count target**: Is 15-20 references appropriate for background section, or should more be reserved for BAB II?
4. **Manifest specification depth**: How much detail about YAML manifest structure belongs in background vs methodology chapter?
